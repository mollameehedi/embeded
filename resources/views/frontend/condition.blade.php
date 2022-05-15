@extends('layouts.frontend_app')
@section('frontent_content')
        <section id="privacy_poslicy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Terms And Condition</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="privacy_main_contnent"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content">
                            <ul>
                                <li>Posted January 1, 2021 </li>
                            </ul>
                            <h3>Last updated January 01, 2021</h3>
                            <div class="all_content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam ipsum ipsa facere a magnam aperiam minima, dolores vitae natus expedita, fugiat at iusto! Veritatis, labore quisquam nemo laborum explicabo architecto quidem commodi dolorem nisi a harum quas ab aliquam ex non incidunt repudiandae quia doloremque id perspiciatis, facilis nulla recusandae ipsum. Est blanditiis odit, adipisci suscipit, voluptates quasi ea itaque, vel facilis cumque deleniti illo officiis aspernatur? Voluptatum perspiciatis voluptas, nihil nobis, nam nulla aut ea vero suscipit a consequatur excepturi accusantium odio enim deleniti. Ab sapiente fugiat in suscipit placeat a illum harum. Autem nulla deleniti sapiente numquam ipsa, vel illum facilis voluptates aspernatur dolorum praesentium, tenetur quam minus aliquid, blanditiis eos quis distinctio quibusdam reiciendis cum culpa eum dolor. Magnam quia autem veniam ut nemo et pariatur, dignissimos deserunt laborum totam commodi doloribus nihil recusandae cumque iste ea alias quibusdam tenetur consequuntur earum perspiciatis nam. Ullam ab ut ipsum non necessitatibus quia, voluptate alias et. Officiis quo, aspernatur id suscipit nobis, illum corporis tempora, deleniti inventore ipsa praesentium quas voluptas magnam! Veniam, nam perferendis, vitae doloremque tempore nihil officia asperiores recusandae accusantium expedita culpa autem numquam molestias illo ut. Earum aspernatur sed ratione atque quis placeat quo maxime aut molestiae blanditiis vero facilis, ut natus aperiam quas porro quae inventore ullam asperiores corrupti suscipit, numquam neque officia enim! Perferendis nulla unde incidunt at, quia similique omnis fugiat tempore eligendi ex, voluptate totam facere sequi debitis repellat rerum expedita illum aspernatur pariatur vel neque. Ipsa iure eaque provident!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories">
                            <h3>Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('index') }}#category_{{ $category->id }}">{{ $category->name }}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection