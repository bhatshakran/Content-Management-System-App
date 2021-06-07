  <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2021</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->  
  
  
    <script>


const dropBtn = document.querySelector('.menuToggle')
let toggle = false;
const links = document.querySelector('#links')

dropBtn.addEventListener('click', function () {

   console.log('eotmi')

    
   if(!toggle) {
    links.style.display = 'block';
    toggle = true
  
   }else if(toggle) {
    links.style.display = 'none';
    toggle = false;
   }
    
}) 
 

window.addEventListener('resize', () => {
console.log(window.innerWidth)
if(window.innerWidth >= '768') {
  links.style.display= 'block';
}else{
 links.style.display ='none'
}
})

</script>
</body>

</html>
