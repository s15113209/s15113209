function testOne(number){
    return new Promise((resolve,reject)=>{
        if(number===1){
            resolve('符合')
        }else{
            resolve('不符合')
        }
    })
}
let result = await testOne(1)
console.log(result);

//----------------------(+all)----------------------------

function saySomething(words){
    return new Promise((resolve,reject)=>{
        if(words==="shit"){
            resolve('不准說髒話')
        }else{
            resolve(words)
        }
    })
}
let actions = [saySomething('Hello'),saySomething('Hi')]
let promises = await Promise.all(actions)
console.log(promises);
