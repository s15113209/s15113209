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
