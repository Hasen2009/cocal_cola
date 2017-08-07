@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center" style="color: red ; font-weight: bold"> Coca Cola </h1>
                <p class="lead" style="text-align: justify">What's in a name? John S Pemberton finalises the formula for his new drink, and his partner, Frank M Robinson, suggests the name <strong style="color: red" >Coca-Cola</strong>, believing that “the two Cs would look well in advertising”. He experiments with writing the company's name in Spencerian script – a popular writing style back then.</p>
            </div>

        </div>
        @each('pages.cards', ['http://www.topdesignmag.com/wp-content/uploads/2011/05/together1-500x276.png','https://anothermarketinggeek.files.wordpress.com/2017/03/cokes.jpg?w=825','http://www.adweek.com/files/2016_Jan/coke-taste-the-feeling-11.jpg'],'key' )
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 " id="sec3" >
                    <p class="lead">
                        Coca Cola ! <br>
                        The #1 Drink !<br>

                        Cold your body, calm your anger!
                    </p>
                </div>
            </div>
        </div>
        <br>
@endsection
@section('footer')
    @endsection