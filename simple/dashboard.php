<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Florida Video Post</title>
    <link rel="stylesheet" href="dist/css/fvp.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>


    <!-- dashboard -->
    <div id="dashboard">

        <!-- accent -->
        <!--<div class="accent">
            <img src="dist/images/logo.png" class="logo" />
            <ul>
                <li><a href="#"><i class="fas fa-user-plus"></i></a></li>
                <li><a href="#" class="active"><i class="fas fa-upload"></i></a></li>
            </ul>
        </div>-->
        <!-- accent -->

        <!-- nav -->
        <div class="nav">
            <ul>
                <li><a href="#" class="active"><i class="fas fa-user-plus"></i> Client</a></li>
                <li><a href="#"><i class="fas fa-upload"></i> Video</a></li>
            </ul>
        </div>
        <!-- nav -->

        <!-- content -->
        <div class="content">

            <!-- login -->
            <div id="add-client" data-aos="flip-left" data-aos-duration="800">
                <!--<form action="#">

                    <div class="autoselect">
                        <input type="text" name="clients" id="clients" placeholder="Start typing the client code..." />
                    </div>

                    <input type="text" name="job" id="job" placeholder="Job Number" />
                    <input type="text" name="title" id="title" placeholder="Title" />
                    <input type="text" name="duration" id="duration" placeholder="Duration" />
                    <input type="file" name="video" id="video" class="file-input" placeholder="Choose a Video" />
                    <label for="video">Choose a Video</label>
                    <a class="submit" href="#"><i class="fab fa-telegram-plane"></i> Add Client</a>

                </form>
            </div> -->
            <!-- login -->


 

        <iframe src=""></iframe>
        <img src=""/>




            </div>
        <!-- content -->












    </div>
    <!-- dashboard -->










    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="dist/js/all.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://apis.google.com/js/api.js"></script>
    
    <script>

        var key = 'AIzaSyBuNb7uDwoGqbeFk6uBtO4QFelg2KdhOYU';
        var channelId = 'UCzX5VuQFrT49lV1Vvdup_xg';
        var client = 'zX5VuQFrT49lV1Vvdup_xg'; 

        axios.get('https://www.googleapis.com/youtube/v3/playlists', {
            params: {
                /*part: 'snippet',
                maxResults: 1,
                key: key,
                q: 'CHMO',*/
                key: 'AIzaSyBuNb7uDwoGqbeFk6uBtO4QFelg2KdhOYU',
                channelId: 'UCzX5VuQFrT49lV1Vvdup_xg',
                q: "CHMO",
                part: 'snippet',
                maxResults: 20,
                type: 'video',
                videoEmbeddable: true,
            }
        })
        
        .then(function (data) {
            //embedVideo(data);
            console.log (data)
        })
  
        .catch(function (error) {
            console.log(error);
        })
  
  
  
        function embedVideo(data) {
            $('iframe').attr('src', 'https://www.youtube.com/embed/' + data.items[0].id)
            //$('h3').text(data.items.snippet.title)
            //$('.description').text(data.items.snippet.description)
            $('img').attr('src', data.items[0].snippet.thumbnails.high.url)
        }


  
  
    </script>
















    <script type="text/javascript">
        AOS.init();
        // "UUzX5VuQFrT49lV1Vvdup_xg"
    </script>






</body>

</html>