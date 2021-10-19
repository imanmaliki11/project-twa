@extends('layout.main')

@section('content')

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/27/1200/300" class="d-block w-100 rounded-bottom-lg" alt="image">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/437/1200/300" class="d-block w-100 rounded-bottom-lg" alt="image">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/701/1200/300" class="d-block w-100 rounded-bottom-lg" alt="image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about section  -->
    <div class="h4 text-center my-3">About Us</div>
    <p class="text-justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe iusto. Ullam a iure magni? Laborum adipisci itaque dolores ut eum. Nulla excepturi expedita fugit aliquam ullam nobis quasi doloribus, maxime placeat incidunt aut dolore, corporis quae facere deserunt soluta veritatis modi, at cum consectetur. Aliquam dolore, id totam deleniti repellendus veritatis laboriosam neque molestias explicabo obcaecati aperiam et debitis, consequuntur mollitia eius quia distinctio vitae facilis earum sit, provident veniam voluptatem modi odio! Doloribus tempore fugit nulla voluptas blanditiis, fuga, minus molestiae fugiat, similique dolore modi illum eius id deserunt laborum recusandae autem omnis explicabo qui inventore obcaecati pariatur sit culpa deleniti! A quae maiores reprehenderit fugit minus alias iure iusto nostrum pariatur illo vitae, dicta natus doloribus omnis temporibus quibusdam sint vero excepturi enim perferendis tempore saepe aspernatur. Reiciendis nulla itaque iusto doloremque sapiente placeat dolor, at omnis veniam nobis voluptatibus impedit iure unde! Ipsum ut vero eligendi!
    </p>

    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quae officiis animi ducimus sunt voluptate praesentium iure cum eius similique expedita aliquam, ratione voluptatem sequi dolorum eligendi veritatis quaerat vel!.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
    </figure>

    <div class="h4 text-center my-3">Our Service</div>

</div>

@endsection