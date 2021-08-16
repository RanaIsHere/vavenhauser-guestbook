@extends('preload.default')

@section('container')
<div class="container bg-dark text-light">
    <h1> Home </h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veritatis quae doloremque cupiditate voluptate impedit tenetur perferendis repudiandae, omnis eaque cumque. Ea animi nemo possimus illo facere recusandae dolor accusantium dicta nam ex, doloribus non obcaecati laboriosam harum aliquid eius mollitia magnam ut ducimus odit nulla! Iusto, vel. Corrupti modi animi, suscipit repellendus distinctio quo unde quidem obcaecati corporis iusto itaque voluptatem culpa quisquam at nemo mollitia, maxime laborum? Nisi quisquam et soluta fugiat dicta? Magni in porro enim rerum quos autem commodi totam non vel, itaque laudantium, sint omnis, modi similique illum assumenda veniam quod qui expedita quibusdam! Atque.</p>

    <div class="container bg-light pt-2 pb-5 mb-5 rounded-3 word-wrap text-break">
        <div class="container d-lg-flex flex-grow justify-content-center">
            <a href="/media" class="text-decoration-none text-white">
                <div class="card me-2 mt-2 bg-dark">
                    <img src="images/img_2.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Media Posts.</h5>
                      <p class="card-text">A list of postings strictly used by Vavenhauser website.</p>
                    </div>
            </a>
            </div>


            <a href="/guestbook" class="text-decoration-none text-white">
                <div class="card me-2 mt-2 bg-dark">
                    <img src="images/img_2.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Guestbook</h5>
                      <p class="card-text">A form used to send messages to the organization, depending on their wishes.</p>
                    </div>
            </a>
                </div>

            <a href="/login" class="text-decoration-none text-white">
                <div class="card me-2 mt-2 bg-dark" >
                    <img src="images/img_2.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Login & Register</h5>
                      <p class="card-text">A registration form and login form strictly used by the organization to enter the administration center.</p>
                    </div>
            </a>
                </div>

            <a href="/messaging" class="text-decoration-none text-white">
                <div class="card me-2 mt-2 bg-dark" >
                    <img src="images/img_2.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Messaging</h5>
                      <p class="card-text">A realtime messaging app built in Laravel</p>
                    </div>
            </a>
                </div>


            <a href="/" class="text-decoration-none text-white">
                <div class="card bg-dark mt-2 me-2" >
                    <img src="images/img_2.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Static Menu</h5>
                      <p class="card-text">A Static Restaurant Menu, experimental for mobile and PC usage.</p>
                    </div>
            </a>
                </div>
        </div>
    </div>
</div>
@endsection
