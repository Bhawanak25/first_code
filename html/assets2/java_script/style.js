// function test(num,num1,num2)
// {
//     alert('lol');
//     // if(num=='' && num1=='' && num2=='')
//     // {
//     //     alert
//     // }
// }
// function student()
// {
//     const stu=new Object();
//     stu.name='bhawana';
//     stu.firstname='bhawana';
//     stu.lastname='kumawat';
//     stu.branch='cse';
//     stu.section='b';
//     stu.department='aaaa';
//     stu.tutor_name='rajesh sir';
//     stu.college_name='skit';
//     stu.fullname=function(){
//     return this.firstname + " " + this.lastname;
//   }
//  document.getElementById('demo').innerHTML="stu name:"+stu.fullname();
// }




// form 
// function studentregister()
// {
//     let fname=document.getElementById('fname').value;
//     let lname=document.getElementById('lname').value;
//     let email=document.getElementById('email').value;
//     let contact=document.getElementById('contact').value;
//     if(!fname){
//         var fname_error=document.getElementById('fname_error').innerHTML="please enter your first name";
//     }
//     else if(!lname){
//         var lname_error=document.getElementById('lname_error').innerHTML="please enter your last name";
//     }
//     else if(!email){
//         var email_error=document.getElementById('email_error').innerHTML="please enter your email id";
//     }
//     else if(!contact||isNaN(contact)){
//         var contact_error=document.getElementById('contact_error').innerHTML="please enter your phone number";
        
//     }
//     else{
//         var success_error=document.getElementById('success_error').innerHTML="your registration is successful";
//     }
// }

// form end



// function coursedetails(course) {
//     let coursedetailss;

//     switch (course) {
//         case 'bca':
//             coursedetailss = "bca";
//             break;
//         case 'mca':
//             coursedetailss = "mca";
//             break;
//         case 'ba':
//             coursedetailss = "ba";
//             break;
//         case 'btech':
//             coursedetailss = "btech";
//             break;
//     }
//     document.getElementById('demo').innerHTML=coursedetailss;
// }


// function employeedetails(id){
//     let empdetail,empname,empid;
//     switch(id){
//   case 1001:
//     empname='joey';
//     empid=1001;
//     break;
//   case 1002:
//     empname='olive';
//     empid=1002;
//     break;
//   case 1003:
//      empname='oggy';
//     empid=1003;
//     break;
//   case 1004:
//     empname='jack';
//     empid=1004;
//     break;
//   case 1005:
//     empname='bob';
//     empid=1005;
//     break;
//   case 1006:
//     empname='nobita';
//     empid=1006;
//     break;
//   case 1007:
//     empname='doraemon';
//     empid=1007;
//     break;
//     }
//     document.getElementById('demo').innerHTML='employee name'+'='+empname+'<br>employee id'+'='+empid;
// }


// function loop()
// {
//     const stu={name:'oggy',id:123455,department:'cse'};
//     let record='';
//     let data;
//     for(data in stu)
//     {
//         record+=stu[data]+"<br/> ";
//     }
//     document.write(record );
// }
// function loop2(){
//     let rollno=[1,2,3,4,5,6,7];
//     let data='';
//     rollno.forEach(sturn)
//     function sturn(val,index,array){
//         data+=val+" <br/>";
//     }
//     document.write(data);
//     //document.getElementById('number').innerHTML=data+'<br/>';
// }

// Jquery started


$(document).ready(function () {
    $("#toggleButton").click(function () {
        $(".hide_p").toggle(1000);
    });
    $("#hideButton").click(function () {
        $(".hide_p").hide(1000);
    });
    $("#showButton").click(function () {
        $(".hide_p").show(1000);
    });
    $("#fadeButton").click(function () {
        $(".fadeContent").fadeToggle(1000)
    });
});
