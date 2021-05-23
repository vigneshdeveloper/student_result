function calculateAmount(val) {
  var tot_mark = val;

  var divobj = document.getElementById('mark_opt');
  divobj.value = val;
  
  if(tot_mark>=50){
   /*display the result*/
  var divobj = document.getElementById('result');
  divobj.value = 1;
  }else{
    var divobj = document.getElementById('result');
  divobj.value = 0;
  }
  
  if(tot_mark>=90){
   /*display the result*/
  var divobj = document.getElementById('grade');
  divobj.value = "S";
  }else if(tot_mark>=80){
    var divobj = document.getElementById('grade');
  divobj.value = "A+";
  }else if(tot_mark>=70){
    var divobj = document.getElementById('grade');
  divobj.value = "A";
  }else if(tot_mark>=60){
    var divobj = document.getElementById('grade');
  divobj.value = "B";
  }else if(tot_mark>=50){
    var divobj = document.getElementById('grade');
  divobj.value = "c";
  }else{
    var divobj = document.getElementById('grade');
  divobj.value = "F";
  }
 }