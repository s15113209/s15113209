var arr=["Hello", true, 1234]
var colors=new Array("Red","Green","Blue") //建構子

for(let i=0; i<colors.length; i++){
  alert(colors[i])
}


var a=[1, 2, 3, 4, 5 ,6, 7, 8]
a.pop() //砍8
a.shift()  //砍1
//a = [2,3,4,5,6,7]
a.splice(5,1,10)  //在第5處 砍掉1個元素 塞入10
//a = [2, 3, 4, 5, 6, 10]
a.splice(1,3,10,11,12)  //在第1處 砍3個元素 塞入10,11,12
//a = [2, 10, 11, 12, 6, 10]
a.splice(1,0,88)  //在第1處 不砍元素 塞入88
//a = [2, 88, 10, 11, 12, 6, 10]
a.slice(2,4)  //第二 到 第四項為止(不含四)
//10, 11
a.push(99)  //從後面新增
//a = [2, 88, 10, 11, 12, 6, 10, 99]

var a=[1,2,3,4,5,6,7,8]
a.join()
//"1,2,3,4,5,6,7,8"
a.join('')
//"12345678"
a.join('|')
//"1|2|3|4|5|6|7|8"
a.join('~')
//"1~2~3~4~5~6~7~8"
