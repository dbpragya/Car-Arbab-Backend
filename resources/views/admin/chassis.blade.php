@extends('admin.layouts.app')
@section('content')
<style>


    #canvasContainer {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    #baseImageCanvas {
        width: 100%;
        border: 1px solid #000;
    }
    
    .hover-image {
        position: absolute;
        display: none;
        border: 2px solid #000;
        border-radius: 4px;
        transition: all 0.2s ease-in-out;
    }

    .hover-image img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
    }

    #fileInput {
        display: none;
    }

</style>


            
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1>Chassis Perfect</h1>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="car_id" name="car_id" value="{{ $car_id }}">
        <div id="canvasContainer">
            <canvas id="baseImageCanvas"></canvas>
        </div>
        <div id="hoverImageContainer" class="hover-image"></div>
        <input type="file" id="fileInput" accept="image/*">
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        let hoverImages = [];

        const fetchData = async () => {
            try {
                const carId = document.getElementById('car_id').value;
                const response = await fetch(`https://pragya.dbtechserver.online/car_arbab/admin/images?car_id=${carId}`);
                
                const data = await response.json();
                hoverImages = data.map(item => ({
                    x: parseFloat(item.xcord),
                    y: parseFloat(item.ycord),
                    src: `https://pragya.dbtechserver.online/car_arbab/public/images/canvas/${item.image}`
                }));
                console.log(hoverImages); 
                drawBaseImage(); 
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };
        
        await fetchData();

        const canvasContainer = document.getElementById('canvasContainer');
        const canvas = document.getElementById('baseImageCanvas');
        const ctx = canvas.getContext('2d');
        const hoverImageContainer = document.getElementById('hoverImageContainer');
        const fileInput = document.getElementById('fileInput');
        const carIdInput = document.getElementById('car_id');

        const baseImage = new Image();
        baseImage.src = 'https://pragya.dbtechserver.online/car_arbab/public/images/canvas/car-skeleton2.png';

        const resizeCanvas = () => {
            canvas.width = canvasContainer.clientWidth;
            canvas.height = canvasContainer.clientWidth * (baseImage.height / baseImage.width);
            drawBaseImage();
        };

        const drawBaseImage = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(baseImage, 0, 0, canvas.width, canvas.height);
        
            ctx.fillStyle = 'red';
            hoverImages.forEach(img => {
                ctx.beginPath();
                ctx.arc(img.x * canvas.width, img.y * canvas.height, 5, 0, Math.PI * 2);
                ctx.fill();
            });
        };
        baseImage.onload = () => {
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);
        };

        canvas.addEventListener('mousemove', (e) => {
            const rect = canvas.getBoundingClientRect();
            const mouseX = e.clientX - rect.left;
            const mouseY = e.clientY - rect.top;
            let hoveredImage = null;

            hoverImages.forEach(img => {
                const distance = Math.sqrt((mouseX - img.x * canvas.width) ** 2 + (mouseY - img.y * canvas.height) ** 2);
                if (distance < 10) { 
                    hoveredImage = img;
                }
            });

            if (hoveredImage) {
                hoverImageContainer.innerHTML = `<img src="${hoveredImage.src}" alt="Hovered Image">`;
                hoverImageContainer.style.display = 'block';
                hoverImageContainer.style.top = `${e.pageY + 10}px`;
                hoverImageContainer.style.left = `${e.pageX + 10}px`;
            } else {
                hoverImageContainer.style.display = 'none';
            }
        });

        canvas.addEventListener('click', (e) => {
            const rect = canvas.getBoundingClientRect();
            const mouseX = e.clientX - rect.left;
            const mouseY = e.clientY - rect.top;

            console.log('MouseX:', mouseX, 'MouseY:', mouseY);

            fileInput.click();

            fileInput.onchange = (event) => {
                const file = event.target.files[0];
                const width = 200;
                const height = 200;
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (loadEvent) => {
                        const img = new Image();
                        img.onload = () => {
                            ctx.drawImage(img, mouseX - width / 2, mouseY - height / 2, width, height);
                            // Send file and coordinates to the server
                            const formData = new FormData();
                            formData.append('image', file);
                            formData.append('xcord', mouseX / canvas.width);
                            formData.append('ycord', mouseY / canvas.height);
                            formData.append('car_id', carIdInput.value);

                            // Get the CSRF token
                            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                            // Add the CSRF token to the request headers
                            fetch('https://pragya.dbtechserver.online/car_arbab/admin/upload', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': token
                                },
                                body: formData
                            })
                                .then(response => response.json())
                                .then(data => {
                                    console.log('File name saved to database:', data);
                                    location.reload();
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                        };
                        img.src = loadEvent.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            };
        });
    });

</script>
