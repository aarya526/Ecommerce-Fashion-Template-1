@extends('layouts.main')
@section('main-section')
    <div class="wrapper">
        <section class="category-tiles-container">
            <div class="category-grid">
                <div class="single-category-grid grid-large" style="background-image: url('/img/category/category-1.jpg')">
                    <div class="category-content">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore edolore magna
                            aliquapendisse ultrices gravida.</p>
                        <a href="#" class="link-cta-1">Shop Now</a>
                    </div>
                </div>
                <div class="single-category-grid">
                    <div class="category-tile" style="background-image: url('/img/category/category-2.jpg')">
                        <div class="category-content">
                            <h1>Men's fashion</h1>
                            <p>278 items</p>
                            <a href="#" class="link-cta-1">Shop Now</a>
                        </div>
                    </div>
                    <div class="category-tile" style="background-image: url('/img/category/category-3.jpg')">
                        <div class="category-content">
                            <h1>Kid's fashion</h1>
                            <p>444 item</p>
                            <a href="#" class="link-cta-1">Shop Now</a>
                        </div>
                    </div>
                    <div class="category-tile" style="background-image: url('/img/category/category-4.jpg')">
                        <div class="category-content">
                            <h1>Cosmetics</h1>
                            <p>388 item</p>
                            <a href="#" class="link-cta-1">Shop Now</a>
                        </div>
                    </div>
                    <div class="category-tile" style="background-image: url('/img/category/category-5.jpg')">
                        <div class="category-content">
                            <h1>Accessories</h1>
                            <p>112 item</p>
                            <a href="#" class="link-cta-1">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
