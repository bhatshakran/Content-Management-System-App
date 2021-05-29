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
                
            })

            </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </body>
</html>