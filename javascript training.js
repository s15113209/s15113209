var person={
    name:"ShiranuiMai",
    age:20,
    bithday:2000-01-01,
    height:171,
    weight:52,
    speak:function () {
        alert("ShiranuiMai いい加減にして！")
    }
}
// for(let i in person){
//     console.log(i + "：" + person[i])
// }

console.log(Object.keys(person))
for(let i of Object.keys(person))
    console.log(i + "：" + person[i])
