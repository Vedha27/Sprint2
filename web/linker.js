var tabl1=document.querySelector(".tabl")

var id1=document.getElementById("td1")
var id2=document.getElementById("td2")
var id3=document.getElementById("td3")
var id4=document.getElementById("td4")
var id5=document.getElementById("td6")

console.log(id1.textContent)

function subm() 
{
    var r=document.createElement("tr")

    var d1=document.createElement("td")
    var d2=document.createElement("td")
    var d3=document.createElement("td")
    var d4=document.createElement("td")
    var d5=document.createElement("td")

    var pop1=document.querySelector(".popup")
    var cont1=document.querySelector(".cont")

    tabl1.append(r)

    d1.textContent=id1.value
    d2.textContent=id2.value
    d3.textContent=id3.value
    d4.textContent=id4.value
    d5.textContent="Product Shipped"

    r.textContent=d1.value
    r.textContent=d2.value
    r.textContent=d3.value
    r.textContent=d4.value
    r.textContent=d5.value

    r.append(d1)
    r.append(d2)
    r.append(d3)
    r.append(d4)
    r.append(d5)

    pop1.style.display="block"
    cont1.style.display="block"

}

var c11=document.getElementById("c1")
var pop1=document.querySelector(".popup")
var cont1=document.querySelector(".cont")

function close1()
{
    pop1.style.display="none"
    cont1.style.display="none"
}