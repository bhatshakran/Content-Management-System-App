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
   let navlink = document.querySelectorAll('.nav-links');
   const navlinkArr = Array.from(navlink);

  
   navlink.forEach(item => {
       item.addEventListener('mouseover', function () {
        let refLink = this.children;
        // console.log(refLink)
        for(let element of refLink ) {
            console.log(element.classList)
            console.log('next')
           if(element.classList.filter(class => return class = 'marker' )){
               console.log('yes')
            //    element.style.color = 'white'
           }
        }
    
        //    refLink.style.color ='white';
           
       })
   })
//    navlink.forEach(item => {
//        item.addEventListener('mouseout', function () {
//         let refLink = this.childNodes.values();
//         for(let element of refLink ) {
           
//            if(element.classList[0] === 'text-gray-500'){
//                element.style.color = 'gray'
//            }
//         }
//        })
//    })
   </script>
  

</body>

</html>
