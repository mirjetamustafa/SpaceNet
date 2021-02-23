 <!-- Footer -->
    <footer style="margin-top: 0;">
        <div class="kontakt">
            
                <h1>Space</h1>
                <span class="contact">Gaming Center</span>
                <p class="contact">Bëjm servisim dhe shitje të pajisjeve teknologjike</p>
                <h6 class="contact">Na kontaktoni</h6>
                <h6 class="contact">044-000-000</h6>
                <h6 class="contact">sspacenet@gmail.com</h6>
                
                <a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>

                <p class="copy">Copyright &copy; <span id="year"></span></p>
        </div>
        <br>
        
    </footer>


  <!-- jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
   

    
    <script>
         
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        
       // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());

        

        function initMap(){
            var options = {
                zoom:8,
                center:{lat: -42.3222, lng: 21.3590}
            }

            var map = new 
         google.maps.Map(document.getElementById("map"), options);
        }
    </script>
     
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpR7_BWHnk04pQraXWt2dBLMWoML242Co&callback=initMap"></script>


</body>
</html>