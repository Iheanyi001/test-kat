import{_ as i}from"./EbP9OSUH.js";import{z as c,A as r,B as t,V as a,W as s,J as l,L as n}from"./CtTGWsm7.js";const d={class:"blog-card"},_={class:"blog-card__image"},u=["src","alt"],m={class:"blog-card__date"},h={class:"blog-card__content"},g={class:"blog-card__meta list-unstyled"},f=t("i",{class:"fa fa-user"},null,-1),b={href:"#"},y=t("i",{class:"fa fa-comments"},null,-1),k={href:"#"},q={class:"blog-card__title"},x=t("i",{class:"fa fa-angle-double-right"},null,-1),V={__name:"BlogOneCard",props:{image:{type:String,required:!0},date:{type:Object,required:!0,default:()=>({day:"",month:""})},author:{type:String,required:!0},comments:{type:Number,required:!0},title:{type:String,required:!0},link:{type:String,required:!0}},setup(e){return(B,S)=>{const o=i;return c(),r("div",d,[t("div",_,[t("img",{src:e.image,alt:e.title},null,8,u),t("div",m,[t("span",null,a(e.date.day),1),s(a(e.date.month),1)])]),t("div",h,[t("ul",g,[t("li",null,[f,t("a",b,a(e.author),1)]),t("li",null,[y,t("a",k,a(e.comments)+" comments",1)])]),t("h3",q,[l(o,{to:e.link},{default:n(()=>[s(a(e.title),1)]),_:1},8,["to"])]),l(o,{to:e.link,class:"blog-card__links"},{default:n(()=>[x,s(" Read More ")]),_:1},8,["to"])])])}}};export{V as _};