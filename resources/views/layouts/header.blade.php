<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafts Nepal</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/Logo_Crafts.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>

      <div class="image-slider">
        <img src="asset/Images/pexels-1.jpg" id="slide">
        {{-- <div class="text1">Authentic Nepalese Handicrafts </div> --}}
        {{-- <div class="text2">Where Tradition Meets Modern Design</div> --}}
      </div> 
    
    
      <script>
        var img = [
          "asset/Images/Clothing-1.jpg",
          "asset/Images/slider-img-1.jpg",
          "asset/Images/slider-img-2.jpg",
          "asset/Images/slider-img-3.jpg",
          "asset/Images/slider-img-4.jpg",
          "asset/Images/pexels-clothing.jpg"
        ];
    
    
        var i = 0;
        function slides() {
            document.getElementById('slide').src = img[i];
            if (i < img.length - 1)
                i++;
            else
                i = 0;
        }
        setInterval(slides, 3000);
      </script>  
    
      </header>
    
    
    
    
    
