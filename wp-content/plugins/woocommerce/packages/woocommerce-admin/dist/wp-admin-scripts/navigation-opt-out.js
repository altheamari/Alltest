this.wc=this.wc||{},this.wc.navigationOptOut=function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=514)}({0:function(e,t){e.exports=window.wp.element},2:function(e,t){e.exports=window.wp.i18n},4:function(e,t){e.exports=window.wp.components},500:function(e,t,n){},514:function(e,t,n){"use strict";n.r(t);var o=n(0),r=n(2),i=n(4);class a extends o.Component{constructor(e){super(e),this.state={isModalOpen:!0}}render(){const{isModalOpen:e}=this.state;return e&&window.surveyData&&window.surveyData.url?Object(o.createElement)(i.Modal,{title:Object(r.__)("Help us improve",'woocommerce'),onRequestClose:()=>this.setState({isModalOpen:!1}),className:"woocommerce-navigation-opt-out-modal"},Object(o.createElement)("p",null,Object(r.__)("Take this 2-minute survey to share why you're opting out of the new navigation",'woocommerce')),Object(o.createElement)("div",{className:"woocommerce-navigation-opt-out-modal__actions"},Object(o.createElement)(i.Button,{isDefault:!0,onClick:()=>this.setState({isModalOpen:!1})},Object(r.__)("No thanks",'woocommerce')),Object(o.createElement)(i.Button,{isPrimary:!0,target:"_blank",href:window.surveyData.url,onClick:()=>this.setState({isModalOpen:!1})},Object(r.__)("Share feedback",'woocommerce')))):null}}n(500);const c=document.createElement("div");c.setAttribute("id","navigation-opt-out-root"),Object(o.render)(Object(o.createElement)(a,null),document.body.appendChild(c))}});