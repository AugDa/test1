   function troj(formularz) {
    
    let a=formularz.a.value;
    let b=formularz.b.value;
    let c=formularz.c.value;
    
    
       
        if(a==b&&b==c){
     alert("twój trójkąt jest równoboczny");
    }


    
    else if(a==b || a==c || b==c){
        
       alert("twój trójkąt jest równoramienny");


    }
    else {

        alert("twój trójkąt jest różnoboczny");
    }
    
    
    
}