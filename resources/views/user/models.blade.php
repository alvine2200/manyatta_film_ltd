<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manyatta.css')}}">
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            background-color: rgb(237, 242, 246);
            border-radius: 3px;
            justify-content: center;
            align-items: center;

            }
        .flex-container .row{
            display: flex;
            flex-wrap: wrap;
        }
        .flex-container .row .image{
            margin: 5px;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom:20px;
        }
        .flex-container .row .image .description{
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .flex-container .row .image > img {
            display: flex;
            background-color: #f5eeee;
            width: 300px;
            padding: 5px;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
         }

    </style>
</head>

<body>
    @include('user.navbar');

        <div style="padding-top:20rem;" class="flex-container">
            <div class="row">
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="images/model2.jpg" class="img-responsive" alt="img">
                   <div class="description">
                      <span>
                         <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                      </span>

                       <h4 style="font-size:13px !Important">Commercial Model</h4>
                    </div>
                </div>

            </div>
        </div>


    <!--footer section starts-->
    @include('user.footer');


<!--footer section ends-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('js/manyatta.js')}}"></script>



</body>
</html>
