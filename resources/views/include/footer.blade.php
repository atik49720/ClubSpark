</div>
</div>
<footer>
    <div class="container">
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>{{date('Y')}} &copy; ClubSpark by <a href="https://github.com/atik49720" target="_blank">@atik49720</a>
                    & <a href="https://github.com/ImtiazAhmedAkash" target="_blank">@ImtiazAhmedAkash</a></p>
            </div>
            <div class="float-end">
                <p>Crafted by <a href="https://saugi.me" target="_blank">Saugi</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
<script>

    if({{Session::has('alert')}}){
        var msg = '{{Session::get('alert')}}';
        Swal.fire({
            position: "top-end",
            icon: 'swal2-icon-hide',
            title: msg,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>
<script src="{{asset('public/assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('public/assets/static/js/pages/horizontal-layout.js')}}"></script>
<script src="{{asset('public/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('public/assets/compiled/js/app.js')}}"></script>


<script src="{{asset('public/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('public/assets/static/js/pages/dashboard.js')}}"></script>

</body>
</html>
