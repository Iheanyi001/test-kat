import{_ as n}from"./lcvxV6UD.js";import{D as g,z as s,A as i,B as a,X as h,Y as y,E as o,L as r,F as w,$ as S,u as c,J as f,a4 as I,a8 as v,a9 as b}from"./CtTGWsm7.js";import{A as x}from"./BPfPly4Y.js";const V=e=>(h("data-v-c673d43c"),e=e(),y(),e),k={class:"gallery-card"},A={class:"gallery-card__image"},B=["src"],G={class:"gallery-card__content"},O=["href"],L=V(()=>a("i",{class:"fab fa-instagram"},null,-1)),N=[L],P={__name:"GalleryOneImage",props:{imageSrc:{type:String,required:!0}},setup(e){return g(()=>{new GLightbox({selector:".img-popup",touchNavigation:!0,loop:!0,autoplayVideos:!0})}),(t,_)=>(s(),i("div",k,[a("div",A,[a("img",{src:e.imageSrc,alt:"#"},null,8,B)]),a("div",G,[a("a",{class:"img-popup",href:e.imageSrc},N,8,O)])]))}},$=n(P,[["__scopeId","data-v-c673d43c"]]),C={__name:"GalleryOneCarousel",setup(e){return(t,_)=>{const l=$,p=v,d=b;return s(),o(d,{modules:["SwiperAutoplay"in t?t.SwiperAutoplay:c(I)],loop:!0,"slides-per-view":1,"space-between":30,autoplay:{delay:8e3,disableOnInteraction:!0},breakpoints:{500:{slidesPerView:3},900:{slidesPerView:4},1200:{slidesPerView:5}}},{default:r(()=>[(s(!0),i(w,null,S(c(x),(u,m)=>(s(),o(p,{key:m},{default:r(()=>[f(l,{imageSrc:u},null,8,["imageSrc"])]),_:2},1024))),128))]),_:1},8,["modules"])}}},z=n(C,[["__scopeId","data-v-1987b388"]]);export{z as _};