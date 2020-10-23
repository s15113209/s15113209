var a=0
var b=0
while (a<9){
    b=0
    a++
    while (b<9){
        b++
        if (b==9) break
        else console.log(a + "*" + b + "=" + a*b)
    }
    console.log(a + "*" + b + "=" + a*b)
}
