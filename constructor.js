class cake{
    constructor(name){
        this.name = name
    }
}
class chococake extends cake{
    constructor(name,price){
        super(name)
        this.price = price
        console.log("這是一塊" + this.name)
        console.log("售價為" + this.price + "$")
    }
    get aprice() {
        return this.price
    }
    set aprice(value) {
        this.price = value
        console.log(this.name + "的售價被更改為：" + this.price + "$")
    }
}

let cake1 = new chococake('Chocolate Cake',200)
let cake2 = new chococake('Belgian Chocolate Cake',380)
cake1.aprice = 210
console.log('驚奇美味比利時巧克力蛋糕現正特價中！　佛心價' + (cake2.aprice - 50) + '$')
