 </div>
            <script>
        
            const selector = document.querySelector('#selectAllBoxes');
            const selectAllList = document.querySelectorAll('#checkBoxes');
            const selectAllArr = Array.from(selectAllList);

            selector.addEventListener('click', () => {

                selectAllArr.forEach(elem => {
                    if(elem.checked){
                        elem.checked = false
                    }else{
                        elem.checked = true;
                    }
                   
                })
                
            });
            </script>
            <script>

// admin toggle function
    let adminToggle = false;
            const adminDropBtn = document.querySelector('.adminMenuToggle')
          
                const adminLinks = document.querySelector('#adminLinks');
                console.log(adminLinks)
                adminDropBtn.addEventListener('click', function () {
            
                console.log('hello')
                
                    
                   if(!adminToggle) {
                    adminLinks.style.display = 'block';
                    adminToggle = true;
                  
                   }else if(adminToggle) {
                    adminLinks.style.display = 'none';
                    adminToggle = false;
                   }
                    
                }) 
                 

                window.addEventListener('resize', () => {
               console.log(window.innerWidth)
               if(window.innerWidth >= '768') {
                  adminLinks.style.display= 'block';
               }else{
                 adminLinks.style.display ='none'
               }
                })

       
                </script>



<script>
            
    //   toggle menu function
            const dropBtn = document.querySelectorAll('.collapse');
                
            let toggle = false;
            dropBtn.forEach((btn, index) => {
                btn.addEventListener('click', function () {
            
                    const nodelis = this.childNodes;
                    const nodeArr = Array.from(nodelis);
                
                    const links = nodeArr[3];
                    
                   if(!toggle) {
                    links.style.display = 'block';
                    toggle = true
                  
                   }else if(toggle) {
                    links.style.display = 'none';
                    toggle = false;
                   }
                    
                    
                 
                
                    
               

            })})
         

</script>

           <!-- summernote editor -->
           <script> 
           
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>


   
    </body>
</html>