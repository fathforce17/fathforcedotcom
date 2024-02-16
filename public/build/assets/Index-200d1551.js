import{h as C,q as v,s as M,r as p,o as l,j as A,k as d,v as P,x as $,d as f,f as s,e as r,b as a,a as m,F as k}from"./app-32ca278b.js";const S={class:"grid grid-cols-3 gap-6"},I={class:"col-span-3 sm:col-span-1"},G={class:"col-span-3 sm:col-span-1"},F={key:0,class:"col-span-3"},K={key:1,class:"col-span-3"},w={class:"mt-4 grid grid-cols-3 gap-6"},E={class:"col-span-3"},T={class:"col-span-3 sm:col-span-1"},j={class:"col-span-3 sm:col-span-1"},H={class:"col-span-3 sm:col-span-1"},q={class:"col-span-3 sm:col-span-1"},D={name:"ConfigNotification"},J=Object.assign(D,{setup(O){const V=C(),g="config/",n=v(g),b={enableGuestNotificationBar:!1,enableAppNotificationBar:!1,guestNotificationMessage:"",appNotificationMessage:"",enablePusherNotification:!1,pusherAppId:"",pusherAppKey:"",pusherAppSecret:"",pusherAppCluster:"",type:"notification"},t=M({...b}),B=()=>{V.dispatch("config/testPusherConnection").catch(i=>{})};return(i,e)=>{const h=p("BaseButton"),_=p("CardHeader"),c=p("BaseSwitch"),N=p("BaseTextarea"),u=p("BaseInput"),y=p("FormAction"),U=p("ConfigPage");return l(),A(U,null,{action:d(()=>[t.enablePusherNotification?(l(),A(h,{key:0,design:"primary",onClick:B},{default:d(()=>[P($(i.$trans("config.notification.test_pusher_connection")),1)]),_:1})):f("",!0)]),default:d(()=>[s(y,{"no-card":"","init-url":g,"data-fetch":"notification","init-form":b,form:t,action:"store","stay-on":"",redirect:"Config"},{default:d(()=>[s(_,{first:"",title:i.$trans("config.notification.notification_config"),description:i.$trans("config.notification.notification_info")},null,8,["title","description"]),r("div",S,[r("div",I,[s(c,{reverse:"",modelValue:t.enableGuestNotificationBar,"onUpdate:modelValue":e[0]||(e[0]=o=>t.enableGuestNotificationBar=o),name:"enableGuestNotificationBar",label:i.$trans("config.notification.props.enable_guest_notification_bar"),error:a(n).enableGuestNotificationBar,"onUpdate:error":e[1]||(e[1]=o=>a(n).enableGuestNotificationBar=o)},null,8,["modelValue","label","error"])]),r("div",G,[s(c,{reverse:"",modelValue:t.enableAppNotificationBar,"onUpdate:modelValue":e[2]||(e[2]=o=>t.enableAppNotificationBar=o),name:"enableAppNotificationBar",label:i.$trans("config.notification.props.enable_app_notification_bar"),error:a(n).enableAppNotificationBar,"onUpdate:error":e[3]||(e[3]=o=>a(n).enableAppNotificationBar=o)},null,8,["modelValue","label","error"])]),t.enableGuestNotificationBar?(l(),m("div",F,[s(N,{rows:2,modelValue:t.guestNotificationMessage,"onUpdate:modelValue":e[4]||(e[4]=o=>t.guestNotificationMessage=o),name:"guestNotificationMessage",placeholder:i.$trans("config.notification.props.guest_notification_message"),error:a(n).guestNotificationMessage,"onUpdate:error":e[5]||(e[5]=o=>a(n).guestNotificationMessage=o)},null,8,["modelValue","placeholder","error"])])):f("",!0),t.enableAppNotificationBar?(l(),m("div",K,[s(N,{rows:2,modelValue:t.appNotificationMessage,"onUpdate:modelValue":e[6]||(e[6]=o=>t.appNotificationMessage=o),name:"appNotificationMessage",placeholder:i.$trans("config.notification.props.app_notification_message"),error:a(n).appNotificationMessage,"onUpdate:error":e[7]||(e[7]=o=>a(n).appNotificationMessage=o)},null,8,["modelValue","placeholder","error"])])):f("",!0)]),r("div",w,[r("div",E,[s(c,{reverse:"",modelValue:t.enablePusherNotification,"onUpdate:modelValue":e[8]||(e[8]=o=>t.enablePusherNotification=o),name:"enablePusherNotification",label:i.$trans("config.notification.props.enable_pusher_notification"),error:a(n).enablePusherNotification,"onUpdate:error":e[9]||(e[9]=o=>a(n).enablePusherNotification=o)},null,8,["modelValue","label","error"])]),t.enablePusherNotification?(l(),m(k,{key:0},[r("div",T,[s(u,{type:"text",modelValue:t.pusherAppId,"onUpdate:modelValue":e[10]||(e[10]=o=>t.pusherAppId=o),name:"pusherAppId",label:i.$trans("config.notification.props.pusher_app_id"),error:a(n).pusherAppId,"onUpdate:error":e[11]||(e[11]=o=>a(n).pusherAppId=o)},null,8,["modelValue","label","error"])]),r("div",j,[s(u,{type:"text",modelValue:t.pusherAppKey,"onUpdate:modelValue":e[12]||(e[12]=o=>t.pusherAppKey=o),name:"pusherAppKey",label:i.$trans("config.notification.props.pusher_app_key"),error:a(n).pusherAppKey,"onUpdate:error":e[13]||(e[13]=o=>a(n).pusherAppKey=o)},null,8,["modelValue","label","error"])]),r("div",H,[s(u,{type:"text",modelValue:t.pusherAppSecret,"onUpdate:modelValue":e[14]||(e[14]=o=>t.pusherAppSecret=o),name:"pusherAppSecret",label:i.$trans("config.notification.props.pusher_app_secret"),error:a(n).pusherAppSecret,"onUpdate:error":e[15]||(e[15]=o=>a(n).pusherAppSecret=o)},null,8,["modelValue","label","error"])]),r("div",q,[s(u,{type:"text",modelValue:t.pusherAppCluster,"onUpdate:modelValue":e[16]||(e[16]=o=>t.pusherAppCluster=o),name:"pusherAppCluster",label:i.$trans("config.notification.props.pusher_app_cluster"),error:a(n).pusherAppCluster,"onUpdate:error":e[17]||(e[17]=o=>a(n).pusherAppCluster=o)},null,8,["modelValue","label","error"])])],64)):f("",!0)])]),_:1},8,["form"])]),_:1})}}});export{J as default};
