 </div>
            <script>
            let adminToggle = false;
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
            const adminDropBtn = document.querySelector('.adminMenuToggle')
          
                const adminLinks = document.querySelector('#adminLinks')

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


    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    </body>
</html>