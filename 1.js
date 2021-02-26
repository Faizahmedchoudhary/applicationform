console.log("hiii")

const search = () =>{
    filter = document.getElementById('myinput').value.toUpperCase();
    mytable = document.getElementById('mytable');
    tr = mytable.getElementsByTagName('tr');

    for ( var i=0; i < tr.length; i++ )
    {
     // let td = tr[i].getElementsByTagName('td')[0];
      let td = tr[i].getElementsByTagName('td')[0];
      
      if (td){
         let  textvalue = td.innerHTML;
         if (textvalue.toUpperCase().indexOf(filter) > -1 ) {
             tr[i].style.display = "";
         }            
            else{
                tr[i].style.display = "none";
            }
      }


    }


}