import{n as e}from"./numbers.zAmItkHM.js";import{_ as a}from"./_plugin-vue_export-helper.BLXtEB-G.js";import{o as u,c as o,t as m}from"./runtime-core.esm-bundler.DMBo7TXk.js";const s={props:{number:Number,fromNumber:{type:Number,default(){return 0}},formatNumber:{type:Boolean,default(){return!0}}},data(){return{animatedNumber:0}},watch:{number(){this.animateNumber()}},computed:{formattedNumber(){return this.formatNumber?e.numberFormat(this.animatedNumber):this.animatedNumber}},methods:{animateNumber(){const t=e.animateNumbers(this.fromNumber,this.number,r=>this.animatedNumber=r);window.addEventListener("blur",()=>{t.cancel(),this.animatedNumber=this.number})}},mounted(){this.animateNumber()}};function i(t,r,c,l,p,n){return u(),o("span",null,m(n.formattedNumber),1)}const d=a(s,[["render",i]]);export{d as U};
