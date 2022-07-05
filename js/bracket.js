
//------------------------Box 1-------------------------------
{
    const Res01 = document.getElementById("Result1");
    const Res02 = document.getElementById("Result2");

    const Name01 = document.getElementById("Player1");
    const Name02 = document.getElementById("Player2");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 > parseInt(Res02.value)){
            document.getElementById("Player9").innerHTML = Name01.value;
            Res01.style.backgroundColor='orange';   

        } else if (Result01 < parseInt(Res02.value)){
            document.getElementById("Player9").innerHTML = "";
            Res01.style.backgroundColor='#83858b';             
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 > parseInt(Res01.value)){
            document.getElementById("Player9").innerHTML = Name02.value;
            Res02.style.backgroundColor='orange';  

        } else if (Result02 < parseInt(Res01.value)){
            document.getElementById("Player9").innerHTML = "";
            Res02.style.backgroundColor='#83858b';              
        }
    })

}
//------------------------Box 2-------------------------------
{
    const Res01 = document.getElementById("Result3");
    const Res02 = document.getElementById("Result4");

    const Name01 = document.getElementById("Player3");
    const Name02 = document.getElementById("Player4");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 > parseInt(Res02.value)){
            document.getElementById("Player10").innerHTML = Name01.value;
            Res01.style.backgroundColor='orange';   

        } else if (Result01 < parseInt(Res02.value)){
            document.getElementById("Player10").innerHTML = "";   
            Res01.style.backgroundColor='#83858b';         
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 > parseInt(Res01.value)){
            document.getElementById("Player10").innerHTML = Name02.value;
            Res02.style.backgroundColor='orange';  

        } else if (Result02 < parseInt(Res01.value)){
            document.getElementById("Player10").innerHTML = "";         
            Res02.style.backgroundColor='#83858b';     
        }
    })

}
//------------------------Box 3-------------------------------
{
    const Res01 = document.getElementById("Result5");
    const Res02 = document.getElementById("Result6");

    const Name01 = document.getElementById("Player5");
    const Name02 = document.getElementById("Player6");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 > parseInt(Res02.value)){
            document.getElementById("Player11").innerHTML = Name01.value;
            Res01.style.backgroundColor='orange';   

        } else if (Result01 < parseInt(Res02.value)){
            document.getElementById("Player11").innerHTML = "";   
            Res01.style.backgroundColor='#83858b';         
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 > parseInt(Res01.value)){
            document.getElementById("Player11").innerHTML = Name02.value;
            Res02.style.backgroundColor='orange';  

        } else if (Result02 < parseInt(Res01.value)){
            document.getElementById("Player11").innerHTML = "";      
            Res02.style.backgroundColor='#83858b';        
        }
    })

}
//------------------------Box 4-------------------------------
{
    const Res01 = document.getElementById("Result7");
    const Res02 = document.getElementById("Result8");

    const Name01 = document.getElementById("Player7");
    const Name02 = document.getElementById("Player8");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 > parseInt(Res02.value)){
            document.getElementById("Player12").innerHTML = Name01.value;
            Res01.style.backgroundColor='orange';   

        } else if (Result01 < parseInt(Res02.value)){
            document.getElementById("Player12").innerHTML = "";   
            Res01.style.backgroundColor='#83858b';         
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 > parseInt(Res01.value)){
            document.getElementById("Player12").innerHTML = Name02.value;
            Res02.style.backgroundColor='orange';  

        } else if (Result02 < parseInt(Res01.value)){
            document.getElementById("Player12").innerHTML = ""; 
            Res02.style.backgroundColor='#83858b';             
        }
    })

}

//------------------------Semi Finals Box 1-------------------------------

{
    const Res01 = document.getElementById("Result9");
    const Res02 = document.getElementById("Result10");

    const Name01 = document.getElementById("Player9");
    const Name02 = document.getElementById("Player10");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 > parseInt(Res02.value)){
            document.getElementById("Player13").innerHTML = Name01.innerHTML;
            Res01.style.backgroundColor='orange';   

        } else if (Result01 < parseInt(Res02.value)){
            document.getElementById("Player13").innerHTML = "";   
            Res01.style.backgroundColor='#83858b';         
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 > parseInt(Res01.value)){
            document.getElementById("Player13").innerHTML = Name02.innerHTML;
            Res02.style.backgroundColor='orange';  

        } else if (Result02 < parseInt(Res01.value)){
            document.getElementById("Player13").innerHTML = "";   
            Res02.style.backgroundColor='#83858b';           
        }
    })

}
//------------------------Semi Finals Box 2-------------------------------
{
    const Res01 = document.getElementById("Result11");
    const Res02 = document.getElementById("Result12");

    const Name01 = document.getElementById("Player11");
    const Name02 = document.getElementById("Player12");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 > parseInt(Res02.value)){
            document.getElementById("Player14").innerHTML = Name01.innerHTML;
            Res01.style.backgroundColor='orange';   

        } else if (Result01 < parseInt(Res02.value)){
            document.getElementById("Player14").innerHTML = "";     
            Res01.style.backgroundColor='#83858b';       
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 > parseInt(Res01.value)){
            document.getElementById("Player14").innerHTML = Name02.innerHTML;
            Res02.style.backgroundColor='orange';  

        } else if (Result02 < parseInt(Res01.value)){
            document.getElementById("Player14").innerHTML = "";     
            Res02.style.backgroundColor='#83858b';         
        }
    })

}
//------------------------ Finals Box -------------------------------
{
const Res01 = document.getElementById("Result13");
const Res02 = document.getElementById("Result14");

const Name01 = document.getElementById("Player13");
const Name02 = document.getElementById("Player14");

Res01.addEventListener("change",()=>{
    let Result01 = parseInt(Res01.value);

    if(Result01 > parseInt(Res02.value)){
        document.getElementById("Player15").innerHTML = Name01.innerHTML;
        Res01.style.backgroundColor='orange';   

    } else if (Result01 < parseInt(Res02.value)){
        document.getElementById("Player15").innerHTML = "";     
        Res01.style.backgroundColor='#83858b';       
    }
})
Res02.addEventListener("change",()=>{
    let Result02 = parseInt(Res02.value);

    if(Result02 > parseInt(Res01.value)){
        document.getElementById("Player15").innerHTML = Name02.innerHTML;
        Res02.style.backgroundColor='orange';  

    } else if (Result02 < parseInt(Res01.value)){
        document.getElementById("Player15").innerHTML = "";     
        Res02.style.backgroundColor='#83858b';         
    }
})
}
