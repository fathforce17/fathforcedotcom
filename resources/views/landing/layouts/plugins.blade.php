<style>
  @charset "UTF-8";
/*!
 * animate.css - https://animate.style/
 * Version - 4.1.1
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2020 Animate.css
 */
:root {
  --animate-duration: 1s;
  --animate-delay: 1s;
  --animate-repeat: 1
}
.animate__animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-duration: var(--animate-duration);
  animation-duration: var(--animate-duration);
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both
}
.animate__animated.animate__infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite
}
.animate__animated.animate__repeat-1 {
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1;
  -webkit-animation-iteration-count: var(--animate-repeat);
  animation-iteration-count: var(--animate-repeat)
}
.animate__animated.animate__repeat-2 {
  -webkit-animation-iteration-count: 2;
  animation-iteration-count: 2;
  -webkit-animation-iteration-count: calc(var(--animate-repeat)*2);
  animation-iteration-count: calc(var(--animate-repeat)*2)
}
.animate__animated.animate__repeat-3 {
  -webkit-animation-iteration-count: 3;
  animation-iteration-count: 3;
  -webkit-animation-iteration-count: calc(var(--animate-repeat)*3);
  animation-iteration-count: calc(var(--animate-repeat)*3)
}
.animate__animated.animate__delay-1s {
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-delay: var(--animate-delay);
  animation-delay: var(--animate-delay)
}
.animate__animated.animate__delay-2s {
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-delay: calc(var(--animate-delay)*2);
  animation-delay: calc(var(--animate-delay)*2)
}
.animate__animated.animate__delay-3s {
  -webkit-animation-delay: 3s;
  animation-delay: 3s;
  -webkit-animation-delay: calc(var(--animate-delay)*3);
  animation-delay: calc(var(--animate-delay)*3)
}
.animate__animated.animate__delay-4s {
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
  -webkit-animation-delay: calc(var(--animate-delay)*4);
  animation-delay: calc(var(--animate-delay)*4)
}
.animate__animated.animate__delay-5s {
  -webkit-animation-delay: 5s;
  animation-delay: 5s;
  -webkit-animation-delay: calc(var(--animate-delay)*5);
  animation-delay: calc(var(--animate-delay)*5)
}
.animate__animated.animate__faster {
  -webkit-animation-duration: .5s;
  animation-duration: .5s;
  -webkit-animation-duration: calc(var(--animate-duration)/2);
  animation-duration: calc(var(--animate-duration)/2)
}
.animate__animated.animate__fast {
  -webkit-animation-duration: .8s;
  animation-duration: .8s;
  -webkit-animation-duration: calc(var(--animate-duration)*0.8);
  animation-duration: calc(var(--animate-duration)*0.8)
}
.animate__animated.animate__slow {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-duration: calc(var(--animate-duration)*2);
  animation-duration: calc(var(--animate-duration)*2)
}
.animate__animated.animate__slower {
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-duration: calc(var(--animate-duration)*3);
  animation-duration: calc(var(--animate-duration)*3)
}
@media (prefers-reduced-motion:reduce),
print {
  .animate__animated {
    -webkit-animation-duration: 1ms !important;
    animation-duration: 1ms !important;
    -webkit-transition-duration: 1ms !important;
    transition-duration: 1ms !important;
    -webkit-animation-iteration-count: 1 !important;
    animation-iteration-count: 1 !important
  }
  .animate__animated[class*=Out] {
    opacity: 0
  }
}
@-webkit-keyframes bounce {
  0%,
  20%,
  53%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  40%,
  43% {
    -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
    transform: translate3d(0, -30px, 0) scaleY(1.1)
  }
  70% {
    -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
    transform: translate3d(0, -15px, 0) scaleY(1.05)
  }
  80% {
    -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
    transition-timing-function: cubic-bezier(.215, .61, .355, 1);
    -webkit-transform: translateZ(0) scaleY(.95);
    transform: translateZ(0) scaleY(.95)
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
    transform: translate3d(0, -4px, 0) scaleY(1.02)
  }
}
@keyframes bounce {
  0%,
  20%,
  53%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  40%,
  43% {
    -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
    transform: translate3d(0, -30px, 0) scaleY(1.1)
  }
  70% {
    -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
    transform: translate3d(0, -15px, 0) scaleY(1.05)
  }
  80% {
    -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
    transition-timing-function: cubic-bezier(.215, .61, .355, 1);
    -webkit-transform: translateZ(0) scaleY(.95);
    transform: translateZ(0) scaleY(.95)
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
    transform: translate3d(0, -4px, 0) scaleY(1.02)
  }
}
.animate__bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  transform-origin: center bottom
}
@-webkit-keyframes flash {
  0%,
  50%,
  to {
    opacity: 1
  }
  25%,
  75% {
    opacity: 0
  }
}
@keyframes flash {
  0%,
  50%,
  to {
    opacity: 1
  }
  25%,
  75% {
    opacity: 0
  }
}
.animate__flash {
  -webkit-animation-name: flash;
  animation-name: flash
}
@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05)
  }
  to {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
@keyframes pulse {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05)
  }
  to {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
.animate__pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse;
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out
}
@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
  30% {
    -webkit-transform: scale3d(1.25, .75, 1);
    transform: scale3d(1.25, .75, 1)
  }
  40% {
    -webkit-transform: scale3d(.75, 1.25, 1);
    transform: scale3d(.75, 1.25, 1)
  }
  50% {
    -webkit-transform: scale3d(1.15, .85, 1);
    transform: scale3d(1.15, .85, 1)
  }
  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
    transform: scale3d(.95, 1.05, 1)
  }
  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
    transform: scale3d(1.05, .95, 1)
  }
  to {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
  30% {
    -webkit-transform: scale3d(1.25, .75, 1);
    transform: scale3d(1.25, .75, 1)
  }
  40% {
    -webkit-transform: scale3d(.75, 1.25, 1);
    transform: scale3d(.75, 1.25, 1)
  }
  50% {
    -webkit-transform: scale3d(1.15, .85, 1);
    transform: scale3d(1.15, .85, 1)
  }
  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
    transform: scale3d(.95, 1.05, 1)
  }
  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
    transform: scale3d(1.05, .95, 1)
  }
  to {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
.animate__rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand
}
@-webkit-keyframes shakeX {
  0%,
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
}
@keyframes shakeX {
  0%,
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
}
.animate__shakeX {
  -webkit-animation-name: shakeX;
  animation-name: shakeX
}
@-webkit-keyframes shakeY {
  0%,
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
}
@keyframes shakeY {
  0%,
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
}
.animate__shakeY {
  -webkit-animation-name: shakeY;
  animation-name: shakeY
}
@-webkit-keyframes headShake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0)
  }
  6.5% {
    -webkit-transform: translateX(-6px) rotateY(-9deg);
    transform: translateX(-6px) rotateY(-9deg)
  }
  18.5% {
    -webkit-transform: translateX(5px) rotateY(7deg);
    transform: translateX(5px) rotateY(7deg)
  }
  31.5% {
    -webkit-transform: translateX(-3px) rotateY(-5deg);
    transform: translateX(-3px) rotateY(-5deg)
  }
  43.5% {
    -webkit-transform: translateX(2px) rotateY(3deg);
    transform: translateX(2px) rotateY(3deg)
  }
  50% {
    -webkit-transform: translateX(0);
    transform: translateX(0)
  }
}
@keyframes headShake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0)
  }
  6.5% {
    -webkit-transform: translateX(-6px) rotateY(-9deg);
    transform: translateX(-6px) rotateY(-9deg)
  }
  18.5% {
    -webkit-transform: translateX(5px) rotateY(7deg);
    transform: translateX(5px) rotateY(7deg)
  }
  31.5% {
    -webkit-transform: translateX(-3px) rotateY(-5deg);
    transform: translateX(-3px) rotateY(-5deg)
  }
  43.5% {
    -webkit-transform: translateX(2px) rotateY(3deg);
    transform: translateX(2px) rotateY(3deg)
  }
  50% {
    -webkit-transform: translateX(0);
    transform: translateX(0)
  }
}
.animate__headShake {
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;
  -webkit-animation-name: headShake;
  animation-name: headShake
}
@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg)
  }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg)
  }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg)
  }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg)
  }
  to {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg)
  }
}
@keyframes swing {
  20% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg)
  }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg)
  }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg)
  }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg)
  }
  to {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg)
  }
}
.animate__swing {
  -webkit-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing
}
@-webkit-keyframes tada {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
  10%,
  20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
    transform: scale3d(.9, .9, .9) rotate(-3deg)
  }
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
  }
  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
  }
  to {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
@keyframes tada {
  0% {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
  10%,
  20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
    transform: scale3d(.9, .9, .9) rotate(-3deg)
  }
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
  }
  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
  }
  to {
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
.animate__tada {
  -webkit-animation-name: tada;
  animation-name: tada
}
@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
    transform: translate3d(-25%, 0, 0) rotate(-5deg)
  }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
    transform: translate3d(20%, 0, 0) rotate(3deg)
  }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
    transform: translate3d(-15%, 0, 0) rotate(-3deg)
  }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
    transform: translate3d(10%, 0, 0) rotate(2deg)
  }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
    transform: translate3d(-5%, 0, 0) rotate(-1deg)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes wobble {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
    transform: translate3d(-25%, 0, 0) rotate(-5deg)
  }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
    transform: translate3d(20%, 0, 0) rotate(3deg)
  }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
    transform: translate3d(-15%, 0, 0) rotate(-3deg)
  }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
    transform: translate3d(10%, 0, 0) rotate(2deg)
  }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
    transform: translate3d(-5%, 0, 0) rotate(-1deg)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__wobble {
  -webkit-animation-name: wobble;
  animation-name: wobble
}
@-webkit-keyframes jello {
  0%,
  11.1%,
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg)
  }
  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg)
  }
  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg)
  }
  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg)
  }
  66.6% {
    -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
    transform: skewX(-.78125deg) skewY(-.78125deg)
  }
  77.7% {
    -webkit-transform: skewX(.390625deg) skewY(.390625deg);
    transform: skewX(.390625deg) skewY(.390625deg)
  }
  88.8% {
    -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
    transform: skewX(-.1953125deg) skewY(-.1953125deg)
  }
}
@keyframes jello {
  0%,
  11.1%,
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg)
  }
  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg)
  }
  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg)
  }
  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg)
  }
  66.6% {
    -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
    transform: skewX(-.78125deg) skewY(-.78125deg)
  }
  77.7% {
    -webkit-transform: skewX(.390625deg) skewY(.390625deg);
    transform: skewX(.390625deg) skewY(.390625deg)
  }
  88.8% {
    -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
    transform: skewX(-.1953125deg) skewY(-.1953125deg)
  }
}
.animate__jello {
  -webkit-animation-name: jello;
  animation-name: jello;
  -webkit-transform-origin: center;
  transform-origin: center
}
@-webkit-keyframes heartBeat {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1)
  }
  14% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3)
  }
  28% {
    -webkit-transform: scale(1);
    transform: scale(1)
  }
  42% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3)
  }
  70% {
    -webkit-transform: scale(1);
    transform: scale(1)
  }
}
@keyframes heartBeat {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1)
  }
  14% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3)
  }
  28% {
    -webkit-transform: scale(1);
    transform: scale(1)
  }
  42% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3)
  }
  70% {
    -webkit-transform: scale(1);
    transform: scale(1)
  }
}
.animate__heartBeat {
  -webkit-animation-name: heartBeat;
  animation-name: heartBeat;
  -webkit-animation-duration: 1.3s;
  animation-duration: 1.3s;
  -webkit-animation-duration: calc(var(--animate-duration)*1.3);
  animation-duration: calc(var(--animate-duration)*1.3);
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out
}
@-webkit-keyframes backInDown {
  0% {
    -webkit-transform: translateY(-1200px) scale(.7);
    transform: translateY(-1200px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
@keyframes backInDown {
  0% {
    -webkit-transform: translateY(-1200px) scale(.7);
    transform: translateY(-1200px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
.animate__backInDown {
  -webkit-animation-name: backInDown;
  animation-name: backInDown
}
@-webkit-keyframes backInLeft {
  0% {
    -webkit-transform: translateX(-2000px) scale(.7);
    transform: translateX(-2000px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
@keyframes backInLeft {
  0% {
    -webkit-transform: translateX(-2000px) scale(.7);
    transform: translateX(-2000px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
.animate__backInLeft {
  -webkit-animation-name: backInLeft;
  animation-name: backInLeft
}
@-webkit-keyframes backInRight {
  0% {
    -webkit-transform: translateX(2000px) scale(.7);
    transform: translateX(2000px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
@keyframes backInRight {
  0% {
    -webkit-transform: translateX(2000px) scale(.7);
    transform: translateX(2000px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
.animate__backInRight {
  -webkit-animation-name: backInRight;
  animation-name: backInRight
}
@-webkit-keyframes backInUp {
  0% {
    -webkit-transform: translateY(1200px) scale(.7);
    transform: translateY(1200px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
@keyframes backInUp {
  0% {
    -webkit-transform: translateY(1200px) scale(.7);
    transform: translateY(1200px) scale(.7);
    opacity: .7
  }
  80% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
}
.animate__backInUp {
  -webkit-animation-name: backInUp;
  animation-name: backInUp
}
@-webkit-keyframes backOutDown {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateY(700px) scale(.7);
    transform: translateY(700px) scale(.7);
    opacity: .7
  }
}
@keyframes backOutDown {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateY(700px) scale(.7);
    transform: translateY(700px) scale(.7);
    opacity: .7
  }
}
.animate__backOutDown {
  -webkit-animation-name: backOutDown;
  animation-name: backOutDown
}
@-webkit-keyframes backOutLeft {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateX(-2000px) scale(.7);
    transform: translateX(-2000px) scale(.7);
    opacity: .7
  }
}
@keyframes backOutLeft {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateX(-2000px) scale(.7);
    transform: translateX(-2000px) scale(.7);
    opacity: .7
  }
}
.animate__backOutLeft {
  -webkit-animation-name: backOutLeft;
  animation-name: backOutLeft
}
@-webkit-keyframes backOutRight {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateX(2000px) scale(.7);
    transform: translateX(2000px) scale(.7);
    opacity: .7
  }
}
@keyframes backOutRight {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateX(0) scale(.7);
    transform: translateX(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateX(2000px) scale(.7);
    transform: translateX(2000px) scale(.7);
    opacity: .7
  }
}
.animate__backOutRight {
  -webkit-animation-name: backOutRight;
  animation-name: backOutRight
}
@-webkit-keyframes backOutUp {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateY(-700px) scale(.7);
    transform: translateY(-700px) scale(.7);
    opacity: .7
  }
}
@keyframes backOutUp {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
  }
  20% {
    -webkit-transform: translateY(0) scale(.7);
    transform: translateY(0) scale(.7);
    opacity: .7
  }
  to {
    -webkit-transform: translateY(-700px) scale(.7);
    transform: translateY(-700px) scale(.7);
    opacity: .7
  }
}
.animate__backOutUp {
  -webkit-animation-name: backOutUp;
  animation-name: backOutUp
}
@-webkit-keyframes bounceIn {
  0%,
  20%,
  40%,
  60%,
  80%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    -webkit-transform: scale3d(.97, .97, .97);
    transform: scale3d(.97, .97, .97)
  }
  to {
    opacity: 1;
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
@keyframes bounceIn {
  0%,
  20%,
  40%,
  60%,
  80%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    -webkit-transform: scale3d(.97, .97, .97);
    transform: scale3d(.97, .97, .97)
  }
  to {
    opacity: 1;
    -webkit-transform: scaleX(1);
    transform: scaleX(1)
  }
}
.animate__bounceIn {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-animation-duration: calc(var(--animate-duration)*0.75);
  animation-duration: calc(var(--animate-duration)*0.75);
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn
}
@-webkit-keyframes bounceInDown {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
    transform: translate3d(0, -3000px, 0) scaleY(3)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0) scaleY(.9);
    transform: translate3d(0, 25px, 0) scaleY(.9)
  }
  75% {
    -webkit-transform: translate3d(0, -10px, 0) scaleY(.95);
    transform: translate3d(0, -10px, 0) scaleY(.95)
  }
  90% {
    -webkit-transform: translate3d(0, 5px, 0) scaleY(.985);
    transform: translate3d(0, 5px, 0) scaleY(.985)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes bounceInDown {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
    transform: translate3d(0, -3000px, 0) scaleY(3)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0) scaleY(.9);
    transform: translate3d(0, 25px, 0) scaleY(.9)
  }
  75% {
    -webkit-transform: translate3d(0, -10px, 0) scaleY(.95);
    transform: translate3d(0, -10px, 0) scaleY(.95)
  }
  90% {
    -webkit-transform: translate3d(0, 5px, 0) scaleY(.985);
    transform: translate3d(0, 5px, 0) scaleY(.985)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__bounceInDown {
  -webkit-animation-name: bounceInDown;
  animation-name: bounceInDown
}
@-webkit-keyframes bounceInLeft {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0) scaleX(3);
    transform: translate3d(-3000px, 0, 0) scaleX(3)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0) scaleX(1);
    transform: translate3d(25px, 0, 0) scaleX(1)
  }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0) scaleX(.98);
    transform: translate3d(-10px, 0, 0) scaleX(.98)
  }
  90% {
    -webkit-transform: translate3d(5px, 0, 0) scaleX(.995);
    transform: translate3d(5px, 0, 0) scaleX(.995)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes bounceInLeft {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0) scaleX(3);
    transform: translate3d(-3000px, 0, 0) scaleX(3)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0) scaleX(1);
    transform: translate3d(25px, 0, 0) scaleX(1)
  }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0) scaleX(.98);
    transform: translate3d(-10px, 0, 0) scaleX(.98)
  }
  90% {
    -webkit-transform: translate3d(5px, 0, 0) scaleX(.995);
    transform: translate3d(5px, 0, 0) scaleX(.995)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft
}
@-webkit-keyframes bounceInRight {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
    transform: translate3d(3000px, 0, 0) scaleX(3)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
    transform: translate3d(-25px, 0, 0) scaleX(1)
  }
  75% {
    -webkit-transform: translate3d(10px, 0, 0) scaleX(.98);
    transform: translate3d(10px, 0, 0) scaleX(.98)
  }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0) scaleX(.995);
    transform: translate3d(-5px, 0, 0) scaleX(.995)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes bounceInRight {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
    transform: translate3d(3000px, 0, 0) scaleX(3)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
    transform: translate3d(-25px, 0, 0) scaleX(1)
  }
  75% {
    -webkit-transform: translate3d(10px, 0, 0) scaleX(.98);
    transform: translate3d(10px, 0, 0) scaleX(.98)
  }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0) scaleX(.995);
    transform: translate3d(-5px, 0, 0) scaleX(.995)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__bounceInRight {
  -webkit-animation-name: bounceInRight;
  animation-name: bounceInRight
}
@-webkit-keyframes bounceInUp {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
    transform: translate3d(0, 3000px, 0) scaleY(5)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0) scaleY(.9);
    transform: translate3d(0, -20px, 0) scaleY(.9)
  }
  75% {
    -webkit-transform: translate3d(0, 10px, 0) scaleY(.95);
    transform: translate3d(0, 10px, 0) scaleY(.95)
  }
  90% {
    -webkit-transform: translate3d(0, -5px, 0) scaleY(.985);
    transform: translate3d(0, -5px, 0) scaleY(.985)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes bounceInUp {
  0%,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
    transform: translate3d(0, 3000px, 0) scaleY(5)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0) scaleY(.9);
    transform: translate3d(0, -20px, 0) scaleY(.9)
  }
  75% {
    -webkit-transform: translate3d(0, 10px, 0) scaleY(.95);
    transform: translate3d(0, 10px, 0) scaleY(.95)
  }
  90% {
    -webkit-transform: translate3d(0, -5px, 0) scaleY(.985);
    transform: translate3d(0, -5px, 0) scaleY(.985)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__bounceInUp {
  -webkit-animation-name: bounceInUp;
  animation-name: bounceInUp
}
@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9)
  }
  50%,
  55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  to {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
}
@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9)
  }
  50%,
  55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  to {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
}
.animate__bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-animation-duration: calc(var(--animate-duration)*0.75);
  animation-duration: calc(var(--animate-duration)*0.75);
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut
}
@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0) scaleY(.985);
    transform: translate3d(0, 10px, 0) scaleY(.985)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0) scaleY(.9);
    transform: translate3d(0, -20px, 0) scaleY(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0) scaleY(3);
    transform: translate3d(0, 2000px, 0) scaleY(3)
  }
}
@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0) scaleY(.985);
    transform: translate3d(0, 10px, 0) scaleY(.985)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0) scaleY(.9);
    transform: translate3d(0, -20px, 0) scaleY(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0) scaleY(3);
    transform: translate3d(0, 2000px, 0) scaleY(3)
  }
}
.animate__bounceOutDown {
  -webkit-animation-name: bounceOutDown;
  animation-name: bounceOutDown
}
@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0) scaleX(.9);
    transform: translate3d(20px, 0, 0) scaleX(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0) scaleX(2);
    transform: translate3d(-2000px, 0, 0) scaleX(2)
  }
}
@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0) scaleX(.9);
    transform: translate3d(20px, 0, 0) scaleX(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0) scaleX(2);
    transform: translate3d(-2000px, 0, 0) scaleX(2)
  }
}
.animate__bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft
}
@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0) scaleX(.9);
    transform: translate3d(-20px, 0, 0) scaleX(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0) scaleX(2);
    transform: translate3d(2000px, 0, 0) scaleX(2)
  }
}
@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0) scaleX(.9);
    transform: translate3d(-20px, 0, 0) scaleX(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0) scaleX(2);
    transform: translate3d(2000px, 0, 0) scaleX(2)
  }
}
.animate__bounceOutRight {
  -webkit-animation-name: bounceOutRight;
  animation-name: bounceOutRight
}
@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0) scaleY(.985);
    transform: translate3d(0, -10px, 0) scaleY(.985)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0) scaleY(.9);
    transform: translate3d(0, 20px, 0) scaleY(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0) scaleY(3);
    transform: translate3d(0, -2000px, 0) scaleY(3)
  }
}
@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0) scaleY(.985);
    transform: translate3d(0, -10px, 0) scaleY(.985)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0) scaleY(.9);
    transform: translate3d(0, 20px, 0) scaleY(.9)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0) scaleY(3);
    transform: translate3d(0, -2000px, 0) scaleY(3)
  }
}
.animate__bounceOutUp {
  -webkit-animation-name: bounceOutUp;
  animation-name: bounceOutUp
}
@-webkit-keyframes fadeIn {
  0% {
    opacity: 0
  }
  to {
    opacity: 1
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0
  }
  to {
    opacity: 1
  }
}
.animate__fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn
}
@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown
}
@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig
}
@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft
}
@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig
}
@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight
}
@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig
}
@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp
}
@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig
}
@-webkit-keyframes fadeInTopLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, -100%, 0);
    transform: translate3d(-100%, -100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInTopLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, -100%, 0);
    transform: translate3d(-100%, -100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInTopLeft {
  -webkit-animation-name: fadeInTopLeft;
  animation-name: fadeInTopLeft
}
@-webkit-keyframes fadeInTopRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, -100%, 0);
    transform: translate3d(100%, -100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInTopRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, -100%, 0);
    transform: translate3d(100%, -100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInTopRight {
  -webkit-animation-name: fadeInTopRight;
  animation-name: fadeInTopRight
}
@-webkit-keyframes fadeInBottomLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 100%, 0);
    transform: translate3d(-100%, 100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInBottomLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 100%, 0);
    transform: translate3d(-100%, 100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInBottomLeft {
  -webkit-animation-name: fadeInBottomLeft;
  animation-name: fadeInBottomLeft
}
@-webkit-keyframes fadeInBottomRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 100%, 0);
    transform: translate3d(100%, 100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes fadeInBottomRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 100%, 0);
    transform: translate3d(100%, 100%, 0)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__fadeInBottomRight {
  -webkit-animation-name: fadeInBottomRight;
  animation-name: fadeInBottomRight
}
@-webkit-keyframes fadeOut {
  0% {
    opacity: 1
  }
  to {
    opacity: 0
  }
}
@keyframes fadeOut {
  0% {
    opacity: 1
  }
  to {
    opacity: 0
  }
}
.animate__fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut
}
@-webkit-keyframes fadeOutDown {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}
@keyframes fadeOutDown {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}
.animate__fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown
}
@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}
@keyframes fadeOutDownBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}
.animate__fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig
}
@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}
@keyframes fadeOutLeft {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}
.animate__fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft
}
@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}
@keyframes fadeOutLeftBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}
.animate__fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig
}
@-webkit-keyframes fadeOutRight {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}
@keyframes fadeOutRight {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}
.animate__fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  animation-name: fadeOutRight
}
@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}
@keyframes fadeOutRightBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}
.animate__fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig
}
@-webkit-keyframes fadeOutUp {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}
@keyframes fadeOutUp {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}
.animate__fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp
}
@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}
@keyframes fadeOutUpBig {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}
.animate__fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig
}
@-webkit-keyframes fadeOutTopLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, -100%, 0);
    transform: translate3d(-100%, -100%, 0)
  }
}
@keyframes fadeOutTopLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, -100%, 0);
    transform: translate3d(-100%, -100%, 0)
  }
}
.animate__fadeOutTopLeft {
  -webkit-animation-name: fadeOutTopLeft;
  animation-name: fadeOutTopLeft
}
@-webkit-keyframes fadeOutTopRight {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, -100%, 0);
    transform: translate3d(100%, -100%, 0)
  }
}
@keyframes fadeOutTopRight {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, -100%, 0);
    transform: translate3d(100%, -100%, 0)
  }
}
.animate__fadeOutTopRight {
  -webkit-animation-name: fadeOutTopRight;
  animation-name: fadeOutTopRight
}
@-webkit-keyframes fadeOutBottomRight {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 100%, 0);
    transform: translate3d(100%, 100%, 0)
  }
}
@keyframes fadeOutBottomRight {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 100%, 0);
    transform: translate3d(100%, 100%, 0)
  }
}
.animate__fadeOutBottomRight {
  -webkit-animation-name: fadeOutBottomRight;
  animation-name: fadeOutBottomRight
}
@-webkit-keyframes fadeOutBottomLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 100%, 0);
    transform: translate3d(-100%, 100%, 0)
  }
}
@keyframes fadeOutBottomLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 100%, 0);
    transform: translate3d(-100%, 100%, 0)
  }
}
.animate__fadeOutBottomLeft {
  -webkit-animation-name: fadeOutBottomLeft;
  animation-name: fadeOutBottomLeft
}
@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
    transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  40% {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
    transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  50% {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
    transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95) translateZ(0) rotateY(0deg);
    transform: perspective(400px) scale3d(.95, .95, .95) translateZ(0) rotateY(0deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  to {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
    transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
}
@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
    transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  40% {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
    transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  50% {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
    transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95) translateZ(0) rotateY(0deg);
    transform: perspective(400px) scale3d(.95, .95, .95) translateZ(0) rotateY(0deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  to {
    -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
    transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
}
.animate__animated.animate__flip {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip
}
@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-20deg);
    transform: perspective(400px) rotateX(-20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotateX(-5deg);
    transform: perspective(400px) rotateX(-5deg)
  }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}
@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-20deg);
    transform: perspective(400px) rotateX(-20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotateX(-5deg);
    transform: perspective(400px) rotateX(-5deg)
  }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}
.animate__flipInX {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX
}
@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-20deg);
    transform: perspective(400px) rotateY(-20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(-5deg);
    transform: perspective(400px) rotateY(-5deg)
  }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}
@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-20deg);
    transform: perspective(400px) rotateY(-20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(-5deg);
    transform: perspective(400px) rotateY(-5deg)
  }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}
.animate__flipInY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY
}
@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotateX(-20deg);
    transform: perspective(400px) rotateX(-20deg);
    opacity: 1
  }
  to {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    opacity: 0
  }
}
@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotateX(-20deg);
    transform: perspective(400px) rotateX(-20deg);
    opacity: 1
  }
  to {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    opacity: 0
  }
}
.animate__flipOutX {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-animation-duration: calc(var(--animate-duration)*0.75);
  animation-duration: calc(var(--animate-duration)*0.75);
  -webkit-animation-name: flipOutX;
  animation-name: flipOutX;
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important
}
@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotateY(-15deg);
    transform: perspective(400px) rotateY(-15deg);
    opacity: 1
  }
  to {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    opacity: 0
  }
}
@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotateY(-15deg);
    transform: perspective(400px) rotateY(-15deg);
    opacity: 1
  }
  to {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    opacity: 0
  }
}
.animate__flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-animation-duration: calc(var(--animate-duration)*0.75);
  animation-duration: calc(var(--animate-duration)*0.75);
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
  animation-name: flipOutY
}
@-webkit-keyframes lightSpeedInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes lightSpeedInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__lightSpeedInRight {
  -webkit-animation-name: lightSpeedInRight;
  animation-name: lightSpeedInRight;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out
}
@-webkit-keyframes lightSpeedInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
    transform: translate3d(-100%, 0, 0) skewX(30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(-20deg);
    transform: skewX(-20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(5deg);
    transform: skewX(5deg)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes lightSpeedInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
    transform: translate3d(-100%, 0, 0) skewX(30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(-20deg);
    transform: skewX(-20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(5deg);
    transform: skewX(5deg)
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__lightSpeedInLeft {
  -webkit-animation-name: lightSpeedInLeft;
  animation-name: lightSpeedInLeft;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out
}
@-webkit-keyframes lightSpeedOutRight {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0
  }
}
@keyframes lightSpeedOutRight {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0
  }
}
.animate__lightSpeedOutRight {
  -webkit-animation-name: lightSpeedOutRight;
  animation-name: lightSpeedOutRight;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in
}
@-webkit-keyframes lightSpeedOutLeft {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
    transform: translate3d(-100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
}
@keyframes lightSpeedOutLeft {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
    transform: translate3d(-100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
}
.animate__lightSpeedOutLeft {
  -webkit-animation-name: lightSpeedOutLeft;
  animation-name: lightSpeedOutLeft;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in
}
@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
@keyframes rotateIn {
  0% {
    -webkit-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
.animate__rotateIn {
  -webkit-animation-name: rotateIn;
  animation-name: rotateIn;
  -webkit-transform-origin: center;
  transform-origin: center
}
@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
@keyframes rotateInDownLeft {
  0% {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
.animate__rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
  animation-name: rotateInDownLeft;
  -webkit-transform-origin: left bottom;
  transform-origin: left bottom
}
@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
@keyframes rotateInDownRight {
  0% {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
.animate__rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
  animation-name: rotateInDownRight;
  -webkit-transform-origin: right bottom;
  transform-origin: right bottom
}
@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
@keyframes rotateInUpLeft {
  0% {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
.animate__rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
  animation-name: rotateInUpLeft;
  -webkit-transform-origin: left bottom;
  transform-origin: left bottom
}
@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
@keyframes rotateInUpRight {
  0% {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    opacity: 1
  }
}
.animate__rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
  animation-name: rotateInUpRight;
  -webkit-transform-origin: right bottom;
  transform-origin: right bottom
}
@-webkit-keyframes rotateOut {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0
  }
}
@keyframes rotateOut {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0
  }
}
.animate__rotateOut {
  -webkit-animation-name: rotateOut;
  animation-name: rotateOut;
  -webkit-transform-origin: center;
  transform-origin: center
}
@-webkit-keyframes rotateOutDownLeft {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0
  }
}
@keyframes rotateOutDownLeft {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0
  }
}
.animate__rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
  animation-name: rotateOutDownLeft;
  -webkit-transform-origin: left bottom;
  transform-origin: left bottom
}
@-webkit-keyframes rotateOutDownRight {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 0
  }
}
@keyframes rotateOutDownRight {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 0
  }
}
.animate__rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
  animation-name: rotateOutDownRight;
  -webkit-transform-origin: right bottom;
  transform-origin: right bottom
}
@-webkit-keyframes rotateOutUpLeft {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 0
  }
}
@keyframes rotateOutUpLeft {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    opacity: 0
  }
}
.animate__rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
  animation-name: rotateOutUpLeft;
  -webkit-transform-origin: left bottom;
  transform-origin: left bottom
}
@-webkit-keyframes rotateOutUpRight {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0
  }
}
@keyframes rotateOutUpRight {
  0% {
    opacity: 1
  }
  to {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0
  }
}
.animate__rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
  animation-name: rotateOutUpRight;
  -webkit-transform-origin: right bottom;
  transform-origin: right bottom
}
@-webkit-keyframes hinge {
  0% {
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  20%,
  60% {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  40%,
  80% {
    -webkit-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1
  }
  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0
  }
}
@keyframes hinge {
  0% {
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  20%,
  60% {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  40%,
  80% {
    -webkit-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1
  }
  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0
  }
}
.animate__hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-duration: calc(var(--animate-duration)*2);
  animation-duration: calc(var(--animate-duration)*2);
  -webkit-animation-name: hinge;
  animation-name: hinge;
  -webkit-transform-origin: top left;
  transform-origin: top left
}
@-webkit-keyframes jackInTheBox {
  0% {
    opacity: 0;
    -webkit-transform: scale(.1) rotate(30deg);
    transform: scale(.1) rotate(30deg);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom
  }
  50% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg)
  }
  70% {
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg)
  }
  to {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1)
  }
}
@keyframes jackInTheBox {
  0% {
    opacity: 0;
    -webkit-transform: scale(.1) rotate(30deg);
    transform: scale(.1) rotate(30deg);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom
  }
  50% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg)
  }
  70% {
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg)
  }
  to {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1)
  }
}
.animate__jackInTheBox {
  -webkit-animation-name: jackInTheBox;
  animation-name: jackInTheBox
}
@-webkit-keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
    transform: translate3d(-100%, 0, 0) rotate(-120deg)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
    transform: translate3d(-100%, 0, 0) rotate(-120deg)
  }
  to {
    opacity: 1;
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn
}
@-webkit-keyframes rollOut {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
    transform: translate3d(100%, 0, 0) rotate(120deg)
  }
}
@keyframes rollOut {
  0% {
    opacity: 1
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
    transform: translate3d(100%, 0, 0) rotate(120deg)
  }
}
.animate__rollOut {
  -webkit-animation-name: rollOut;
  animation-name: rollOut
}
@-webkit-keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
  50% {
    opacity: 1
  }
}
@keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
  50% {
    opacity: 1
  }
}
.animate__zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn
}
@-webkit-keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
@keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
.animate__zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown
}
@-webkit-keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
@keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
.animate__zoomInLeft {
  -webkit-animation-name: zoomInLeft;
  animation-name: zoomInLeft
}
@-webkit-keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
@keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
.animate__zoomInRight {
  -webkit-animation-name: zoomInRight;
  animation-name: zoomInRight
}
@-webkit-keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
@keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
.animate__zoomInUp {
  -webkit-animation-name: zoomInUp;
  animation-name: zoomInUp
}
@-webkit-keyframes zoomOut {
  0% {
    opacity: 1
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
  to {
    opacity: 0
  }
}
@keyframes zoomOut {
  0% {
    opacity: 1
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3)
  }
  to {
    opacity: 0
  }
}
.animate__zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut
}
@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
.animate__zoomOutDown {
  -webkit-animation-name: zoomOutDown;
  animation-name: zoomOutDown;
  -webkit-transform-origin: center bottom;
  transform-origin: center bottom
}
@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
  }
  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
    transform: scale(.1) translate3d(-2000px, 0, 0)
  }
}
@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
  }
  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
    transform: scale(.1) translate3d(-2000px, 0, 0)
  }
}
.animate__zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft;
  -webkit-transform-origin: left center;
  transform-origin: left center
}
@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
  }
  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
    transform: scale(.1) translate3d(2000px, 0, 0)
  }
}
@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
  }
  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
    transform: scale(.1) translate3d(2000px, 0, 0)
  }
}
.animate__zoomOutRight {
  -webkit-animation-name: zoomOutRight;
  animation-name: zoomOutRight;
  -webkit-transform-origin: right center;
  transform-origin: right center
}
@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
    animation-timing-function: cubic-bezier(.55, .055, .675, .19)
  }
  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
    animation-timing-function: cubic-bezier(.175, .885, .32, 1)
  }
}
.animate__zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp;
  -webkit-transform-origin: center bottom;
  transform-origin: center bottom
}
@-webkit-keyframes slideInDown {
  0% {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes slideInDown {
  0% {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown
}
@-webkit-keyframes slideInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes slideInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__slideInLeft {
  -webkit-animation-name: slideInLeft;
  animation-name: slideInLeft
}
@-webkit-keyframes slideInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes slideInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight
}
@-webkit-keyframes slideInUp {
  0% {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
@keyframes slideInUp {
  0% {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible
  }
  to {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
}
.animate__slideInUp {
  -webkit-animation-name: slideInUp;
  animation-name: slideInUp
}
@-webkit-keyframes slideOutDown {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}
@keyframes slideOutDown {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}
.animate__slideOutDown {
  -webkit-animation-name: slideOutDown;
  animation-name: slideOutDown
}
@-webkit-keyframes slideOutLeft {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}
@keyframes slideOutLeft {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}
.animate__slideOutLeft {
  -webkit-animation-name: slideOutLeft;
  animation-name: slideOutLeft
}
@-webkit-keyframes slideOutRight {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}
@keyframes slideOutRight {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}
.animate__slideOutRight {
  -webkit-animation-name: slideOutRight;
  animation-name: slideOutRight
}
@-webkit-keyframes slideOutUp {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}
@keyframes slideOutUp {
  0% {
    -webkit-transform: translateZ(0);
    transform: translateZ(0)
  }
  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}
.animate__slideOutUp {
  -webkit-animation-name: slideOutUp;
  animation-name: slideOutUp
}
/*!
 * GLightbox v3.2.0
 * https://github.com/biati-digital/glightbox
 */
.glightbox-container {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999 !important;
  overflow: hidden;
  -ms-touch-action: none;
  touch-action: none;
  -webkit-text-size-adjust: 100%;
  -moz-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  text-size-adjust: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  outline: none;
}
.glightbox-container.inactive {
  display: none;
}
.glightbox-container .gcontainer {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 9999;
  overflow: hidden;
}
.glightbox-container .gslider {
  -webkit-transition: -webkit-transform 0.4s ease;
  transition: -webkit-transform 0.4s ease;
  transition: transform 0.4s ease;
  transition: transform 0.4s ease, -webkit-transform 0.4s ease;
  height: 100%;
  left: 0;
  top: 0;
  width: 100%;
  position: relative;
  overflow: hidden;
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.glightbox-container .gslide {
  width: 100%;
  position: absolute;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  opacity: 0;
}
.glightbox-container .gslide.current {
  opacity: 1;
  z-index: 99999;
  position: relative;
}
.glightbox-container .gslide.prev {
  opacity: 1;
  z-index: 9999;
}
.glightbox-container .gslide-inner-content {
  width: 100%;
}
.glightbox-container .ginner-container {
  position: relative;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  max-width: 100%;
  margin: auto;
  //height: 100vh;
}
.glightbox-container .ginner-container.gvideo-container {
  width: 100%;
}
.glightbox-container .ginner-container.desc-bottom,
.glightbox-container .ginner-container.desc-top {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}
.glightbox-container .ginner-container.desc-left,
.glightbox-container .ginner-container.desc-right {
  max-width: 100% !important;
}
.gslide iframe,
.gslide video {
  outline: none !important;
  border: none;
  min-height: 165px;
  -webkit-overflow-scrolling: touch;
  -ms-touch-action: auto;
  touch-action: auto;
}
.gslide:not(.current) {
  pointer-events: none;
}
.gslide-image {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.gslide-image img {
  max-height: 100vh;
  display: block;
  padding: 0;
  float: none;
  outline: none;
  border: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  max-width: 100vw;
  width: auto;
  height: auto;
  -o-object-fit: cover;
  object-fit: cover;
  -ms-touch-action: none;
  touch-action: none;
  margin: auto;
  min-width: 200px;
}
.desc-top .gslide-image img,
.desc-bottom .gslide-image img {
  width: auto;
}
.desc-left .gslide-image img,
.desc-right .gslide-image img {
  width: auto;
  max-width: 100%;
}
.gslide-image img.zoomable {
  position: relative;
}
.gslide-image img.dragging {
  cursor: -webkit-grabbing !important;
  cursor: grabbing !important;
  -webkit-transition: none;
  transition: none;
}
.gslide-video {
  position: relative;
  max-width: 100vh;
  width: 100% !important;
}
.gslide-video .plyr__poster-enabled.plyr--loading .plyr__poster {
  display: none;
}
.gslide-video .gvideo-wrapper {
  width: 100%;
  /* max-width: 160vmin; */
  margin: auto;
}
.gslide-video::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(255, 0, 0, 0.34);
  display: none;
}
.gslide-video.playing::before {
  display: none;
}
.gslide-video.fullscreen {
  max-width: 100% !important;
  min-width: 100%;
  height: 75vh;
}
.gslide-video.fullscreen video {
  max-width: 100% !important;
  width: 100% !important;
}
.gslide-inline {
  background: #fff;
  text-align: left;
  max-height: calc(100vh - 40px);
  overflow: auto;
  max-width: 100%;
  margin: auto;
}
.gslide-inline .ginlined-content {
  padding: 20px;
  width: 100%;
}
.gslide-inline .dragging {
  cursor: -webkit-grabbing !important;
  cursor: grabbing !important;
  -webkit-transition: none;
  transition: none;
}
.ginlined-content {
  overflow: auto;
  display: block !important;
  opacity: 1;
}
.gslide-external {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  min-width: 100%;
  background: #fff;
  padding: 0;
  overflow: auto;
  max-height: 75vh;
  height: 100%;
}
.gslide-media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: auto;
}
.zoomed .gslide-media {
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.desc-top .gslide-media,
.desc-bottom .gslide-media {
  margin: 0 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}
.gslide-description {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 0 100%;
  flex: 1 0 100%;
}
.gslide-description.description-left,
.gslide-description.description-right {
  max-width: 100%;
}
.gslide-description.description-bottom,
.gslide-description.description-top {
  margin: 0 auto;
  width: 100%;
}
.gslide-description p {
  margin-bottom: 12px;
}
.gslide-description p:last-child {
  margin-bottom: 0;
}
.zoomed .gslide-description {
  display: none;
}
.glightbox-button-hidden {
  display: none;
}
/*
 * Description for mobiles
 * something like facebook does the description
 * for the photos

.glightbox-mobile .glightbox-container .gslide-description {
  height: auto !important;
  width: 100%;
  position: absolute;
  bottom: 0;
  padding: 19px 11px;
  max-width: 100vw !important;
  -webkit-box-ordinal-group: 3 !important;
  -ms-flex-order: 2 !important;
  order: 2 !important;
  max-height: 78vh;
  overflow: auto !important;
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0.75)));
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.75) 100%);
  -webkit-transition: opacity 0.3s linear;
  transition: opacity 0.3s linear;
  padding-bottom: 50px;
}
.glightbox-mobile .glightbox-container .gslide-title {
  color: #fff;
  font-size: 1em;
}
.glightbox-mobile .glightbox-container .gslide-desc {
  color: #a1a1a1;
}
.glightbox-mobile .glightbox-container .gslide-desc a {
  color: #fff;
  font-weight: bold;
}
.glightbox-mobile .glightbox-container .gslide-desc * {
  color: inherit;
}
.glightbox-mobile .glightbox-container .gslide-desc .desc-more {
  color: #fff;
  opacity: 0.4;
}
*/
.gdesc-open .gslide-media {
  -webkit-transition: opacity 0.5s ease;
  transition: opacity 0.5s ease;
  opacity: 0.4;
}
.gdesc-open .gdesc-inner {
  padding-bottom: 30px;
}
.gdesc-closed .gslide-media {
  -webkit-transition: opacity 0.5s ease;
  transition: opacity 0.5s ease;
  opacity: 1;
}
.greset {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.gabsolute {
  position: absolute;
}
.grelative {
  position: relative;
}
.glightbox-desc {
  display: none !important;
}
.glightbox-open {
  //overflow: hidden;
}
.gloader {
  height: 25px;
  width: 25px;
  -webkit-animation: lightboxLoader 0.8s infinite linear;
  animation: lightboxLoader 0.8s infinite linear;
  border: 2px solid #fff;
  border-right-color: transparent;
  border-radius: 50%;
  position: absolute;
  display: block;
  z-index: 9999;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 47%;
}
.goverlay {
  width: 100%;
  height: calc(100vh + 1px);
  position: fixed;
  top: -1px;
  left: 0;
  background: #000;
  will-change: opacity;
}
.glightbox-mobile .goverlay {
  background: #000;
}
.gprev,
.gnext,
.gclose {
  z-index: 99999;
  cursor: pointer;
  width: 26px;
  height: 44px;
  border: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}
.gprev svg,
.gnext svg,
.gclose svg {
  display: block;
  width: 25px;
  height: auto;
  margin: 0;
  padding: 0;
}
.gprev.disabled,
.gnext.disabled,
.gclose.disabled {
  opacity: 0.1;
}
.gprev .garrow,
.gnext .garrow,
.gclose .garrow {
  stroke: #fff;
}
.gbtn.focused {
  outline: 2px solid #0f3d81;
}
iframe.wait-autoplay {
  opacity: 0;
}
.glightbox-closing .gnext,
.glightbox-closing .gprev,
.glightbox-closing .gclose {
  opacity: 0 !important;
}
/*Skin */
.glightbox-clean .gslide-description {
  background: #fff;
}
.glightbox-clean .gdesc-inner {
  padding: 22px 20px;
}
/*.glightbox-clean .gslide-title {
  font-size: 1em;
  font-weight: normal;
  font-family: arial;
  color: #000;
  margin-bottom: 19px;
  line-height: 1.4em;
}
.glightbox-clean .gslide-desc {
  font-size: 0.86em;
  margin-bottom: 0;
  font-family: arial;
  line-height: 1.4em;
}*/
.glightbox-clean .gslide-video {
  background: #000;
}
.glightbox-clean .gprev,
.glightbox-clean .gnext,
.glightbox-clean .gclose {
  background-color: rgba(0, 0, 0, 0.75);
  border-radius: 4px;
}
.glightbox-clean .gprev path,
.glightbox-clean .gnext path,
.glightbox-clean .gclose path {
  fill: #fff;
}
.glightbox-clean .gprev {
  position: absolute;
  top: -100%;
  left: 30px;
  width: 40px;
  height: 50px;
}
.glightbox-clean .gnext {
  position: absolute;
  top: -100%;
  right: 30px;
  width: 40px;
  height: 50px;
}
.glightbox-clean .gclose {
  width: 35px;
  height: 35px;
  top: 15px;
  right: 10px;
  position: absolute;
}
.glightbox-clean .gclose svg {
  width: 18px;
  height: auto;
}
.glightbox-clean .gclose:hover {
  opacity: 1;
}
/*CSS Animations*/
.gfadeIn {
  -webkit-animation: gfadeIn 0.5s ease;
  animation: gfadeIn 0.5s ease;
}
.gfadeOut {
  -webkit-animation: gfadeOut 0.5s ease;
  animation: gfadeOut 0.5s ease;
}
.gslideOutLeft {
  -webkit-animation: gslideOutLeft 0.3s ease;
  animation: gslideOutLeft 0.3s ease;
}
.gslideInLeft {
  -webkit-animation: gslideInLeft 0.3s ease;
  animation: gslideInLeft 0.3s ease;
}
.gslideOutRight {
  -webkit-animation: gslideOutRight 0.3s ease;
  animation: gslideOutRight 0.3s ease;
}
.gslideInRight {
  -webkit-animation: gslideInRight 0.3s ease;
  animation: gslideInRight 0.3s ease;
}
.gzoomIn {
  -webkit-animation: gzoomIn 0.5s ease;
  animation: gzoomIn 0.5s ease;
}
.gzoomOut {
  -webkit-animation: gzoomOut 0.5s ease;
  animation: gzoomOut 0.5s ease;
}
@-webkit-keyframes lightboxLoader {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes lightboxLoader {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes gfadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes gfadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes gfadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@keyframes gfadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-webkit-keyframes gslideInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-60%, 0, 0);
    transform: translate3d(-60%, 0, 0);
  }
  to {
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}
@keyframes gslideInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-60%, 0, 0);
    transform: translate3d(-60%, 0, 0);
  }
  to {
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}
@-webkit-keyframes gslideOutLeft {
  from {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  to {
    -webkit-transform: translate3d(-60%, 0, 0);
    transform: translate3d(-60%, 0, 0);
    opacity: 0;
    visibility: hidden;
  }
}
@keyframes gslideOutLeft {
  from {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  to {
    -webkit-transform: translate3d(-60%, 0, 0);
    transform: translate3d(-60%, 0, 0);
    opacity: 0;
    visibility: hidden;
  }
}
@-webkit-keyframes gslideInRight {
  from {
    opacity: 0;
    visibility: visible;
    -webkit-transform: translate3d(60%, 0, 0);
    transform: translate3d(60%, 0, 0);
  }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}
@keyframes gslideInRight {
  from {
    opacity: 0;
    visibility: visible;
    -webkit-transform: translate3d(60%, 0, 0);
    transform: translate3d(60%, 0, 0);
  }
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}
@-webkit-keyframes gslideOutRight {
  from {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  to {
    -webkit-transform: translate3d(60%, 0, 0);
    transform: translate3d(60%, 0, 0);
    opacity: 0;
  }
}
@keyframes gslideOutRight {
  from {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  to {
    -webkit-transform: translate3d(60%, 0, 0);
    transform: translate3d(60%, 0, 0);
    opacity: 0;
  }
}
@-webkit-keyframes gzoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 1;
  }
}
@keyframes gzoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes gzoomOut {
  from {
    opacity: 1;
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 0;
  }
}
@keyframes gzoomOut {
  from {
    opacity: 1;
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  to {
    opacity: 0;
  }
}
.glightbox-container .ginner-container {
  width: auto;
  height: auto;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row
}
.glightbox-container .ginner-container.desc-top .gslide-description {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0
}
.glightbox-container .ginner-container.desc-top .gslide-image,
.glightbox-container .ginner-container.desc-top .gslide-image img {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1
}
.glightbox-container .ginner-container.desc-left .gslide-description {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0
}
.glightbox-container .ginner-container.desc-left .gslide-image {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1
}
.gslide-image img {
  max-height: 97vh;
  max-width: 100%
}
.gslide-image img.zoomable {
  cursor: -webkit-zoom-in;
  cursor: zoom-in
}
.zoomed .gslide-image img.zoomable {
  cursor: -webkit-grab;
  cursor: grab
}
.gslide-inline {
  max-height: 95vh
}
.gslide-external {
  max-height: 100vh
}
.gslide-description.description-left,
.gslide-description.description-right {
  max-width: 275px
}
.glightbox-open {
  height: auto
}
.goverlay {
  background: rgba(0, 0, 0, .92)
}
.glightbox-clean .gslide-media {
  -webkit-box-shadow: 1px 2px 9px 0 rgba(0, 0, 0, .65);
  box-shadow: 1px 2px 9px 0 rgba(0, 0, 0, .65)
}
.glightbox-clean .description-left .gdesc-inner,
.glightbox-clean .description-right .gdesc-inner {
  position: absolute;
  height: 100%;
  overflow-y: auto
}
.glightbox-clean .gclose,
.glightbox-clean .gnext,
.glightbox-clean .gprev {
  background-color: rgba(0, 0, 0, .32)
}
.glightbox-clean .gclose:hover,
.glightbox-clean .gnext:hover,
.glightbox-clean .gprev:hover {
  background-color: rgba(0, 0, 0, .7)
}
@media (min-width: 768px) {
  .glightbox-clean .gprev {
    top: 45%
  }
  .glightbox-clean .gnext {
    top: 45%
  }
}
/*
@media (min-width:992px) {
  .glightbox-clean .gclose {
    opacity: .7;
    right: 20px
  }
}
@media screen and (max-height:420px) {
  .goverlay {
    background: #000
  }
}
/**
 * Plyr v3.7.2
 * https://github.com/sampotts/plyr
 */
@charset "UTF-8";
@keyframes plyr-progress {
  to {
    background-position: 25px 0;
    background-position: var(--plyr-progress-loading-size, 25px) 0
  }
}
@keyframes plyr-popup {
  0% {
    opacity: .5;
    transform: translateY(10px)
  }
  to {
    opacity: 1;
    transform: translateY(0)
  }
}
@keyframes plyr-fade-in {
  0% {
    opacity: 0
  }
  to {
    opacity: 1
  }
}
.plyr {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  align-items: center;
  direction: ltr;
  display: flex;
  flex-direction: column;
  font-family: inherit;
  font-family: var(--plyr-font-family, inherit);
  font-variant-numeric: tabular-nums;
  font-weight: 400;
  font-weight: var(--plyr-font-weight-regular, 400);
  line-height: 1.7;
  line-height: var(--plyr-line-height, 1.7);
  max-width: 100%;
  min-width: 200px;
  position: relative;
  text-shadow: none;
  transition: box-shadow .3s ease;
  z-index: 0
}
.plyr audio,
.plyr iframe,
.plyr video {
  display: block;
  height: 100%;
  width: 100%
}
.plyr button {
  font: inherit;
  line-height: inherit;
  width: auto
}
.plyr:focus {
  outline: 0
}
.plyr--full-ui {
  box-sizing: border-box
}
.plyr--full-ui *,
.plyr--full-ui :after,
.plyr--full-ui :before {
  box-sizing: inherit
}
.plyr--full-ui a,
.plyr--full-ui button,
.plyr--full-ui input,
.plyr--full-ui label {
  touch-action: manipulation
}
.plyr__badge {
  background: #4a5464;
  background: var(--plyr-badge-background, #4a5464);
  border-radius: 2px;
  border-radius: var(--plyr-badge-border-radius, 2px);
  color: #fff;
  color: var(--plyr-badge-text-color, #fff);
  font-size: 9px;
  font-size: var(--plyr-font-size-badge, 9px);
  line-height: 1;
  padding: 3px 4px
}
.plyr--full-ui ::-webkit-media-text-track-container {
  display: none
}
.plyr__captions {
  animation: plyr-fade-in .3s ease;
  bottom: 0;
  display: none;
  font-size: 13px;
  font-size: var(--plyr-font-size-small, 13px);
  left: 0;
  padding: 10px;
  padding: var(--plyr-control-spacing, 10px);
  position: absolute;
  text-align: center;
  transition: transform .4s ease-in-out;
  width: 100%
}
.plyr__captions span:empty {
  display: none
}
@media (min-width:480px) {
  .plyr__captions {
    font-size: 15px;
    font-size: var(--plyr-font-size-base, 15px);
    padding: 20px;
    padding: calc(var(--plyr-control-spacing, 10px)*2)
  }
}
@media (min-width:768px) {
  .plyr__captions {
    font-size: 18px;
    font-size: var(--plyr-font-size-large, 18px)
  }
}
.plyr--captions-active .plyr__captions {
  display: block
}
.plyr:not(.plyr--hide-controls) .plyr__controls:not(:empty)~.plyr__captions {
  transform: translateY(-40px);
  transform: translateY(calc(var(--plyr-control-spacing, 10px)*-4))
}
.plyr__caption {
  background: rgba(0, 0, 0, .8);
  background: var(--plyr-captions-background, rgba(0, 0, 0, .8));
  border-radius: 2px;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
  color: #fff;
  color: var(--plyr-captions-text-color, #fff);
  line-height: 185%;
  padding: .2em .5em;
  white-space: pre-wrap
}
.plyr__caption div {
  display: inline
}
.plyr__control {
  background: transparent;
  border: 0;
  border-radius: 3px;
  border-radius: var(--plyr-control-radius, 3px);
  color: inherit;
  cursor: pointer;
  flex-shrink: 0;
  overflow: visible;
  padding: 7px;
  padding: calc(var(--plyr-control-spacing, 10px)*.7);
  position: relative;
  transition: all .3s ease
}
.plyr__control svg {
  fill: currentColor;
  display: block;
  height: 18px;
  height: var(--plyr-control-icon-size, 18px);
  pointer-events: none;
  width: 18px;
  width: var(--plyr-control-icon-size, 18px)
}
.plyr__control:focus {
  outline: 0
}
.plyr__control.plyr__tab-focus {
  outline: 3px dotted #00b2ff;
  outline: var(--plyr-tab-focus-color, var(--plyr-color-main, var(--plyr-color-main, #00b2ff))) dotted 3px;
  outline-offset: 2px
}
a.plyr__control {
  text-decoration: none
}
.plyr__control.plyr__control--pressed .icon--not-pressed,
.plyr__control.plyr__control--pressed .label--not-pressed,
.plyr__control:not(.plyr__control--pressed) .icon--pressed,
.plyr__control:not(.plyr__control--pressed) .label--pressed,
a.plyr__control:after,
a.plyr__control:before {
  display: none
}
.plyr--full-ui ::-webkit-media-controls {
  display: none
}
.plyr__controls {
  align-items: center;
  display: flex;
  justify-content: flex-end;
  text-align: center
}
.plyr__controls .plyr__progress__container {
  flex: 1;
  min-width: 0
}
.plyr__controls .plyr__controls__item {
  margin-left: 2.5px;
  margin-left: calc(var(--plyr-control-spacing, 10px)/4)
}
.plyr__controls .plyr__controls__item:first-child {
  margin-left: 0;
  margin-right: auto
}
.plyr__controls .plyr__controls__item.plyr__progress__container {
  padding-left: 2.5px;
  padding-left: calc(var(--plyr-control-spacing, 10px)/4)
}
.plyr__controls .plyr__controls__item.plyr__time {
  padding: 0 5px;
  padding: 0 calc(var(--plyr-control-spacing, 10px)/2)
}
.plyr__controls .plyr__controls__item.plyr__progress__container:first-child,
.plyr__controls .plyr__controls__item.plyr__time+.plyr__time,
.plyr__controls .plyr__controls__item.plyr__time:first-child {
  padding-left: 0
}
.plyr [data-plyr=airplay],
.plyr [data-plyr=captions],
.plyr [data-plyr=fullscreen],
.plyr [data-plyr=pip],
.plyr__controls:empty {
  display: none
}
.plyr--airplay-supported [data-plyr=airplay],
.plyr--captions-enabled [data-plyr=captions],
.plyr--fullscreen-enabled [data-plyr=fullscreen],
.plyr--pip-supported [data-plyr=pip] {
  display: inline-block
}
.plyr__menu {
  display: flex;
  position: relative
}
.plyr__menu .plyr__control svg {
  transition: transform .3s ease
}
.plyr__menu .plyr__control[aria-expanded=true] svg {
  transform: rotate(90deg)
}
.plyr__menu .plyr__control[aria-expanded=true] .plyr__tooltip {
  display: none
}
.plyr__menu__container {
  animation: plyr-popup .2s ease;
  background: hsla(0, 0%, 100%, .9);
  background: var(--plyr-menu-background, hsla(0, 0%, 100%, .9));
  border-radius: 4px;
  bottom: 100%;
  box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
  box-shadow: var(--plyr-menu-shadow, 0 1px 2px rgba(0, 0, 0, .15));
  color: #4a5464;
  color: var(--plyr-menu-color, #4a5464);
  font-size: 15px;
  font-size: var(--plyr-font-size-base, 15px);
  margin-bottom: 10px;
  position: absolute;
  right: -3px;
  text-align: left;
  white-space: nowrap;
  z-index: 3
}
.plyr__menu__container>div {
  overflow: hidden;
  transition: height .35s cubic-bezier(.4, 0, .2, 1), width .35s cubic-bezier(.4, 0, .2, 1)
}
.plyr__menu__container:after {
  border: 4px solid transparent;
  border-top-color: hsla(0, 0%, 100%, .9);
  border: var(--plyr-menu-arrow-size, 4px) solid transparent;
  border-top-color: var(--plyr-menu-background, hsla(0, 0%, 100%, .9));
  content: "";
  height: 0;
  position: absolute;
  right: 14px;
  right: calc(var(--plyr-control-icon-size, 18px)/2 + var(--plyr-control-spacing, 10px)*.7 - var(--plyr-menu-arrow-size, 4px)/2);
  top: 100%;
  width: 0
}
.plyr__menu__container [role=menu] {
  padding: 7px;
  padding: calc(var(--plyr-control-spacing, 10px)*.7)
}
.plyr__menu__container [role=menuitem],
.plyr__menu__container [role=menuitemradio] {
  margin-top: 2px
}
.plyr__menu__container [role=menuitem]:first-child,
.plyr__menu__container [role=menuitemradio]:first-child {
  margin-top: 0
}
.plyr__menu__container .plyr__control {
  align-items: center;
  color: #4a5464;
  color: var(--plyr-menu-color, #4a5464);
  display: flex;
  font-size: 13px;
  font-size: var(--plyr-font-size-menu, var(--plyr-font-size-small, 13px));
  padding: 4.66667px 10.5px;
  padding: calc(var(--plyr-control-spacing, 10px)*.7/1.5) calc(var(--plyr-control-spacing, 10px)*.7*1.5);
  -webkit-user-select: none;
  user-select: none;
  width: 100%
}
.plyr__menu__container .plyr__control>span {
  align-items: inherit;
  display: flex;
  width: 100%
}
.plyr__menu__container .plyr__control:after {
  border: 4px solid transparent;
  border: var(--plyr-menu-item-arrow-size, 4px) solid transparent;
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%)
}
.plyr__menu__container .plyr__control--forward {
  padding-right: 28px;
  padding-right: calc(var(--plyr-control-spacing, 10px)*.7*4)
}
.plyr__menu__container .plyr__control--forward:after {
  border-left-color: #728197;
  border-left-color: var(--plyr-menu-arrow-color, #728197);
  right: 6.5px;
  right: calc(var(--plyr-control-spacing, 10px)*.7*1.5 - var(--plyr-menu-item-arrow-size, 4px))
}
.plyr__menu__container .plyr__control--forward.plyr__tab-focus:after,
.plyr__menu__container .plyr__control--forward:hover:after {
  border-left-color: currentColor
}
.plyr__menu__container .plyr__control--back {
  font-weight: 400;
  font-weight: var(--plyr-font-weight-regular, 400);
  margin: 7px;
  margin: calc(var(--plyr-control-spacing, 10px)*.7);
  margin-bottom: 3.5px;
  margin-bottom: calc(var(--plyr-control-spacing, 10px)*.7/2);
  padding-left: 28px;
  padding-left: calc(var(--plyr-control-spacing, 10px)*.7*4);
  position: relative;
  width: calc(100% - 14px);
  width: calc(100% - var(--plyr-control-spacing, 10px)*.7*2)
}
.plyr__menu__container .plyr__control--back:after {
  border-right-color: #728197;
  border-right-color: var(--plyr-menu-arrow-color, #728197);
  left: 6.5px;
  left: calc(var(--plyr-control-spacing, 10px)*.7*1.5 - var(--plyr-menu-item-arrow-size, 4px))
}
.plyr__menu__container .plyr__control--back:before {
  background: #dcdfe5;
  background: var(--plyr-menu-back-border-color, #dcdfe5);
  box-shadow: 0 1px 0 #fff;
  box-shadow: 0 1px 0 var(--plyr-menu-back-border-shadow-color, #fff);
  content: "";
  height: 1px;
  left: 0;
  margin-top: 3.5px;
  margin-top: calc(var(--plyr-control-spacing, 10px)*.7/2);
  overflow: hidden;
  position: absolute;
  right: 0;
  top: 100%
}
.plyr__menu__container .plyr__control--back.plyr__tab-focus:after,
.plyr__menu__container .plyr__control--back:hover:after {
  border-right-color: currentColor
}
.plyr__menu__container .plyr__control[role=menuitemradio] {
  padding-left: 7px;
  padding-left: calc(var(--plyr-control-spacing, 10px)*.7)
}
.plyr__menu__container .plyr__control[role=menuitemradio]:after,
.plyr__menu__container .plyr__control[role=menuitemradio]:before {
  border-radius: 100%
}
.plyr__menu__container .plyr__control[role=menuitemradio]:before {
  background: rgba(0, 0, 0, .1);
  content: "";
  display: block;
  flex-shrink: 0;
  height: 16px;
  margin-right: 10px;
  margin-right: var(--plyr-control-spacing, 10px);
  transition: all .3s ease;
  width: 16px
}
.plyr__menu__container .plyr__control[role=menuitemradio]:after {
  background: #fff;
  border: 0;
  height: 6px;
  left: 12px;
  opacity: 0;
  top: 50%;
  transform: translateY(-50%) scale(0);
  transition: transform .3s ease, opacity .3s ease;
  width: 6px
}
.plyr__menu__container .plyr__control[role=menuitemradio][aria-checked=true]:before {
  background: #00b2ff;
  background: var(--plyr-control-toggle-checked-background, var(--plyr-color-main, var(--plyr-color-main, #00b2ff)))
}
.plyr__menu__container .plyr__control[role=menuitemradio][aria-checked=true]:after {
  opacity: 1;
  transform: translateY(-50%) scale(1)
}
.plyr__menu__container .plyr__control[role=menuitemradio].plyr__tab-focus:before,
.plyr__menu__container .plyr__control[role=menuitemradio]:hover:before {
  background: rgba(35, 40, 47, .1)
}
.plyr__menu__container .plyr__menu__value {
  align-items: center;
  display: flex;
  margin-left: auto;
  margin-right: calc(-7px - -2);
  margin-right: calc(var(--plyr-control-spacing, 10px)*.7*-1 - -2);
  overflow: hidden;
  padding-left: 24.5px;
  padding-left: calc(var(--plyr-control-spacing, 10px)*.7*3.5);
  pointer-events: none
}
.plyr--full-ui input[type=range] {
  -webkit-appearance: none;
  appearance: none;
  background: transparent;
  border: 0;
  border-radius: 26px;
  border-radius: calc(var(--plyr-range-thumb-height, 13px)*2);
  color: #00b2ff;
  color: var(--plyr-range-fill-background, var(--plyr-color-main, var(--plyr-color-main, #00b2ff)));
  display: block;
  height: 19px;
  height: calc(var(--plyr-range-thumb-active-shadow-width, 3px)*2 + var(--plyr-range-thumb-height, 13px));
  margin: 0;
  min-width: 0;
  padding: 0;
  transition: box-shadow .3s ease;
  width: 100%
}
.plyr--full-ui input[type=range]::-webkit-slider-runnable-track {
  background: transparent;
  background-image: linear-gradient(90deg, currentColor 0, transparent 0);
  background-image: linear-gradient(to right, currentColor var(--value, 0), transparent var(--value, 0));
  border: 0;
  border-radius: 2.5px;
  border-radius: calc(var(--plyr-range-track-height, 5px)/2);
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  -webkit-transition: box-shadow .3s ease;
  transition: box-shadow .3s ease;
  -webkit-user-select: none;
  user-select: none
}
.plyr--full-ui input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  background: #fff;
  background: var(--plyr-range-thumb-background, #fff);
  border: 0;
  border-radius: 100%;
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2));
  height: 13px;
  height: var(--plyr-range-thumb-height, 13px);
  margin-top: -4px;
  margin-top: calc((var(--plyr-range-thumb-height, 13px) - var(--plyr-range-track-height, 5px))/2*-1);
  position: relative;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  width: 13px;
  width: var(--plyr-range-thumb-height, 13px)
}
.plyr--full-ui input[type=range]::-moz-range-track {
  background: transparent;
  border: 0;
  border-radius: 2.5px;
  border-radius: calc(var(--plyr-range-track-height, 5px)/2);
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  -moz-transition: box-shadow .3s ease;
  transition: box-shadow .3s ease;
  user-select: none
}
.plyr--full-ui input[type=range]::-moz-range-thumb {
  background: #fff;
  background: var(--plyr-range-thumb-background, #fff);
  border: 0;
  border-radius: 100%;
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2));
  height: 13px;
  height: var(--plyr-range-thumb-height, 13px);
  position: relative;
  -moz-transition: all .2s ease;
  transition: all .2s ease;
  width: 13px;
  width: var(--plyr-range-thumb-height, 13px)
}
.plyr--full-ui input[type=range]::-moz-range-progress {
  background: currentColor;
  border-radius: 2.5px;
  border-radius: calc(var(--plyr-range-track-height, 5px)/2);
  height: 5px;
  height: var(--plyr-range-track-height, 5px)
}
.plyr--full-ui input[type=range]::-ms-track {
  color: transparent
}
.plyr--full-ui input[type=range]::-ms-fill-upper,
.plyr--full-ui input[type=range]::-ms-track {
  background: transparent;
  border: 0;
  border-radius: 2.5px;
  border-radius: calc(var(--plyr-range-track-height, 5px)/2);
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  -ms-transition: box-shadow .3s ease;
  transition: box-shadow .3s ease;
  user-select: none
}
.plyr--full-ui input[type=range]::-ms-fill-lower {
  background: transparent;
  background: currentColor;
  border: 0;
  border-radius: 2.5px;
  border-radius: calc(var(--plyr-range-track-height, 5px)/2);
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  -ms-transition: box-shadow .3s ease;
  transition: box-shadow .3s ease;
  user-select: none
}
.plyr--full-ui input[type=range]::-ms-thumb {
  background: #fff;
  background: var(--plyr-range-thumb-background, #fff);
  border: 0;
  border-radius: 100%;
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2));
  height: 13px;
  height: var(--plyr-range-thumb-height, 13px);
  margin-top: 0;
  position: relative;
  -ms-transition: all .2s ease;
  transition: all .2s ease;
  width: 13px;
  width: var(--plyr-range-thumb-height, 13px)
}
.plyr--full-ui input[type=range]::-ms-tooltip {
  display: none
}
.plyr--full-ui input[type=range]::-moz-focus-outer {
  border: 0
}
.plyr--full-ui input[type=range]:focus {
  outline: 0
}
.plyr--full-ui input[type=range].plyr__tab-focus::-webkit-slider-runnable-track {
  outline: 3px dotted #00b2ff;
  outline: var(--plyr-tab-focus-color, var(--plyr-color-main, var(--plyr-color-main, #00b2ff))) dotted 3px;
  outline-offset: 2px
}
.plyr--full-ui input[type=range].plyr__tab-focus::-moz-range-track {
  outline: 3px dotted #00b2ff;
  outline: var(--plyr-tab-focus-color, var(--plyr-color-main, var(--plyr-color-main, #00b2ff))) dotted 3px;
  outline-offset: 2px
}
.plyr--full-ui input[type=range].plyr__tab-focus::-ms-track {
  outline: 3px dotted #00b2ff;
  outline: var(--plyr-tab-focus-color, var(--plyr-color-main, var(--plyr-color-main, #00b2ff))) dotted 3px;
  outline-offset: 2px
}
.plyr__poster {
  background-color: #000;
  background-color: var(--plyr-video-background, var(--plyr-video-background, #000));
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: contain;
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  transition: opacity .2s ease;
  width: 100%;
  z-index: 1
}
.plyr--stopped.plyr__poster-enabled .plyr__poster {
  opacity: 1
}
.plyr--youtube.plyr--paused.plyr__poster-enabled:not(.plyr--stopped) .plyr__poster {
  display: none
}
.plyr__time {
  font-size: 13px;
  font-size: var(--plyr-font-size-time, var(--plyr-font-size-small, 13px))
}
.plyr__time+.plyr__time:before {
  content: "⁄";
  margin-right: 10px;
  margin-right: var(--plyr-control-spacing, 10px)
}
@media (max-width:767px) {
  .plyr__time+.plyr__time {
    display: none
  }
}
.plyr__tooltip {
  background: hsla(0, 0%, 100%, .9);
  background: var(--plyr-tooltip-background, hsla(0, 0%, 100%, .9));
  border-radius: 5px;
  border-radius: var(--plyr-tooltip-radius, 5px);
  bottom: 100%;
  box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
  box-shadow: var(--plyr-tooltip-shadow, 0 1px 2px rgba(0, 0, 0, .15));
  color: #4a5464;
  color: var(--plyr-tooltip-color, #4a5464);
  font-size: 13px;
  font-size: var(--plyr-font-size-small, 13px);
  font-weight: 400;
  font-weight: var(--plyr-font-weight-regular, 400);
  left: 50%;
  line-height: 1.3;
  margin-bottom: 10px;
  margin-bottom: calc(var(--plyr-control-spacing, 10px)/2*2);
  opacity: 0;
  padding: 5px 7.5px;
  padding: calc(var(--plyr-control-spacing, 10px)/2) calc(var(--plyr-control-spacing, 10px)/2*1.5);
  pointer-events: none;
  position: absolute;
  transform: translate(-50%, 10px) scale(.8);
  transform-origin: 50% 100%;
  transition: transform .2s ease .1s, opacity .2s ease .1s;
  white-space: nowrap;
  z-index: 2
}
.plyr__tooltip:before {
  border-left: 4px solid transparent;
  border-left: var(--plyr-tooltip-arrow-size, 4px) solid transparent;
  border-right: 4px solid transparent;
  border-right: var(--plyr-tooltip-arrow-size, 4px) solid transparent;
  border-top: 4px solid hsla(0, 0%, 100%, .9);
  border-top: var(--plyr-tooltip-arrow-size, 4px) solid var(--plyr-tooltip-background, hsla(0, 0%, 100%, .9));
  bottom: -4px;
  bottom: calc(var(--plyr-tooltip-arrow-size, 4px)*-1);
  content: "";
  height: 0;
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
  width: 0;
  z-index: 2
}
.plyr .plyr__control.plyr__tab-focus .plyr__tooltip,
.plyr .plyr__control:hover .plyr__tooltip,
.plyr__tooltip--visible {
  opacity: 1;
  transform: translate(-50%) scale(1)
}
.plyr .plyr__control:hover .plyr__tooltip {
  z-index: 3
}
.plyr__controls>.plyr__control:first-child .plyr__tooltip,
.plyr__controls>.plyr__control:first-child+.plyr__control .plyr__tooltip {
  left: 0;
  transform: translateY(10px) scale(.8);
  transform-origin: 0 100%
}
.plyr__controls>.plyr__control:first-child .plyr__tooltip:before,
.plyr__controls>.plyr__control:first-child+.plyr__control .plyr__tooltip:before {
  left: 16px;
  left: calc(var(--plyr-control-icon-size, 18px)/2 + var(--plyr-control-spacing, 10px)*.7)
}
.plyr__controls>.plyr__control:last-child .plyr__tooltip {
  left: auto;
  right: 0;
  transform: translateY(10px) scale(.8);
  transform-origin: 100% 100%
}
.plyr__controls>.plyr__control:last-child .plyr__tooltip:before {
  left: auto;
  right: 16px;
  right: calc(var(--plyr-control-icon-size, 18px)/2 + var(--plyr-control-spacing, 10px)*.7);
  transform: translateX(50%)
}
.plyr__controls>.plyr__control:first-child .plyr__tooltip--visible,
.plyr__controls>.plyr__control:first-child+.plyr__control .plyr__tooltip--visible,
.plyr__controls>.plyr__control:first-child+.plyr__control.plyr__tab-focus .plyr__tooltip,
.plyr__controls>.plyr__control:first-child+.plyr__control:hover .plyr__tooltip,
.plyr__controls>.plyr__control:first-child.plyr__tab-focus .plyr__tooltip,
.plyr__controls>.plyr__control:first-child:hover .plyr__tooltip,
.plyr__controls>.plyr__control:last-child .plyr__tooltip--visible,
.plyr__controls>.plyr__control:last-child.plyr__tab-focus .plyr__tooltip,
.plyr__controls>.plyr__control:last-child:hover .plyr__tooltip {
  transform: translate(0) scale(1)
}
.plyr__progress {
  left: 6.5px;
  left: calc(var(--plyr-range-thumb-height, 13px)*.5);
  margin-right: 13px;
  margin-right: var(--plyr-range-thumb-height, 13px);
  position: relative
}
.plyr__progress input[type=range],
.plyr__progress__buffer {
  margin-left: -6.5px;
  margin-left: calc(var(--plyr-range-thumb-height, 13px)*-.5);
  margin-right: -6.5px;
  margin-right: calc(var(--plyr-range-thumb-height, 13px)*-.5);
  width: calc(100% + 13px);
  width: calc(100% + var(--plyr-range-thumb-height, 13px))
}
.plyr__progress input[type=range] {
  position: relative;
  z-index: 2
}
.plyr__progress .plyr__tooltip {
  left: 0;
  max-width: 120px;
  overflow-wrap: break-word;
  white-space: normal
}
.plyr__progress__buffer {
  -webkit-appearance: none;
  background: transparent;
  border: 0;
  border-radius: 100px;
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  left: 0;
  margin-top: -2.5px;
  margin-top: calc((var(--plyr-range-track-height, 5px)/2)*-1);
  padding: 0;
  position: absolute;
  top: 50%
}
.plyr__progress__buffer::-webkit-progress-bar {
  background: transparent
}
.plyr__progress__buffer::-webkit-progress-value {
  background: currentColor;
  border-radius: 100px;
  min-width: 5px;
  min-width: var(--plyr-range-track-height, 5px);
  -webkit-transition: width .2s ease;
  transition: width .2s ease
}
.plyr__progress__buffer::-moz-progress-bar {
  background: currentColor;
  border-radius: 100px;
  min-width: 5px;
  min-width: var(--plyr-range-track-height, 5px);
  -moz-transition: width .2s ease;
  transition: width .2s ease
}
.plyr__progress__buffer::-ms-fill {
  border-radius: 100px;
  -ms-transition: width .2s ease;
  transition: width .2s ease
}
.plyr--loading .plyr__progress__buffer {
  animation: plyr-progress 1s linear infinite;
  background-image: linear-gradient(-45deg, rgba(35, 40, 47, .6) 25%, transparent 0, transparent 50%, rgba(35, 40, 47, .6) 0, rgba(35, 40, 47, .6) 75%, transparent 0, transparent);
  background-image: linear-gradient(-45deg, var(--plyr-progress-loading-background, rgba(35, 40, 47, .6)) 25%, transparent 25%, transparent 50%, var(--plyr-progress-loading-background, rgba(35, 40, 47, .6)) 50%, var(--plyr-progress-loading-background, rgba(35, 40, 47, .6)) 75%, transparent 75%, transparent);
  background-repeat: repeat-x;
  background-size: 25px 25px;
  background-size: var(--plyr-progress-loading-size, 25px) var(--plyr-progress-loading-size, 25px);
  color: transparent
}
.plyr--video.plyr--loading .plyr__progress__buffer {
  background-color: hsla(0, 0%, 100%, .25);
  background-color: var(--plyr-video-progress-buffered-background, hsla(0, 0%, 100%, .25))
}
.plyr--audio.plyr--loading .plyr__progress__buffer {
  background-color: rgba(193, 200, 209, .6);
  background-color: var(--plyr-audio-progress-buffered-background, rgba(193, 200, 209, .6))
}
.plyr__progress__marker {
  background-color: #fff;
  background-color: var(--plyr-progress-marker-background, #fff);
  border-radius: 1px;
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 3px;
  width: var(--plyr-progress-marker-width, 3px);
  z-index: 3
}
.plyr__volume {
  align-items: center;
  display: flex;
  max-width: 110px;
  min-width: 80px;
  position: relative;
  width: 20%
}
.plyr__volume input[type=range] {
  margin-left: 5px;
  margin-left: calc(var(--plyr-control-spacing, 10px)/2);
  margin-right: 5px;
  margin-right: calc(var(--plyr-control-spacing, 10px)/2);
  position: relative;
  z-index: 2
}
.plyr--is-ios .plyr__volume {
  min-width: 0;
  width: auto
}
.plyr--audio {
  display: block
}
.plyr--audio .plyr__controls {
  background: #fff;
  background: var(--plyr-audio-controls-background, #fff);
  border-radius: inherit;
  color: #4a5464;
  color: var(--plyr-audio-control-color, #4a5464);
  padding: 10px;
  padding: var(--plyr-control-spacing, 10px)
}
.plyr--audio .plyr__control.plyr__tab-focus,
.plyr--audio .plyr__control:hover,
.plyr--audio .plyr__control[aria-expanded=true] {
  background: #00b2ff;
  background: var(--plyr-audio-control-background-hover, var(--plyr-color-main, var(--plyr-color-main, #00b2ff)));
  color: #fff;
  color: var(--plyr-audio-control-color-hover, #fff)
}
.plyr--full-ui.plyr--audio input[type=range]::-webkit-slider-runnable-track {
  background-color: rgba(193, 200, 209, .6);
  background-color: var(--plyr-audio-range-track-background, var(--plyr-audio-progress-buffered-background, rgba(193, 200, 209, .6)))
}
.plyr--full-ui.plyr--audio input[type=range]::-moz-range-track {
  background-color: rgba(193, 200, 209, .6);
  background-color: var(--plyr-audio-range-track-background, var(--plyr-audio-progress-buffered-background, rgba(193, 200, 209, .6)))
}
.plyr--full-ui.plyr--audio input[type=range]::-ms-track {
  background-color: rgba(193, 200, 209, .6);
  background-color: var(--plyr-audio-range-track-background, var(--plyr-audio-progress-buffered-background, rgba(193, 200, 209, .6)))
}
.plyr--full-ui.plyr--audio input[type=range]:active::-webkit-slider-thumb {
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2), 0 0 0 3px rgba(35, 40, 47, .1);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2)), 0 0 0 var(--plyr-range-thumb-active-shadow-width, 3px) var(--plyr-audio-range-thumb-active-shadow-color, rgba(35, 40, 47, .1))
}
.plyr--full-ui.plyr--audio input[type=range]:active::-moz-range-thumb {
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2), 0 0 0 3px rgba(35, 40, 47, .1);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2)), 0 0 0 var(--plyr-range-thumb-active-shadow-width, 3px) var(--plyr-audio-range-thumb-active-shadow-color, rgba(35, 40, 47, .1))
}
.plyr--full-ui.plyr--audio input[type=range]:active::-ms-thumb {
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2), 0 0 0 3px rgba(35, 40, 47, .1);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2)), 0 0 0 var(--plyr-range-thumb-active-shadow-width, 3px) var(--plyr-audio-range-thumb-active-shadow-color, rgba(35, 40, 47, .1))
}
.plyr--audio .plyr__progress__buffer {
  color: rgba(193, 200, 209, .6);
  color: var(--plyr-audio-progress-buffered-background, rgba(193, 200, 209, .6))
}
.plyr--video {
  background: #000;
  background: var(--plyr-video-background, var(--plyr-video-background, #000));
  overflow: hidden
}
.plyr--video.plyr--menu-open {
  overflow: visible
}
.plyr__video-wrapper {
  background: #000;
  background: var(--plyr-video-background, var(--plyr-video-background, #000));
  height: 100%;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 100%
}
.plyr__video-embed,
.plyr__video-wrapper--fixed-ratio {
  aspect-ratio: 16/9
}
@supports not (aspect-ratio:16/9) {
  .plyr__video-embed,
  .plyr__video-wrapper--fixed-ratio {
    height: 0;
    padding-bottom: 56.25%;
    position: relative
  }
}
.plyr__video-embed iframe,
.plyr__video-wrapper--fixed-ratio video {
  border: 0;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%
}
.plyr--full-ui .plyr__video-embed>.plyr__video-embed__container {
  padding-bottom: 240%;
  position: relative;
  transform: translateY(-38.28125%)
}
.plyr--video .plyr__controls {
  background: linear-gradient(transparent, rgba(0, 0, 0, .75));
  background: var(--plyr-video-controls-background, linear-gradient(transparent, rgba(0, 0, 0, .75)));
  border-bottom-left-radius: inherit;
  border-bottom-right-radius: inherit;
  bottom: 0;
  color: #fff;
  color: var(--plyr-video-control-color, #fff);
  left: 0;
  padding: 5px;
  padding: calc(var(--plyr-control-spacing, 10px)/2);
  padding-top: 20px;
  padding-top: calc(var(--plyr-control-spacing, 10px)*2);
  position: absolute;
  right: 0;
  transition: opacity .4s ease-in-out, transform .4s ease-in-out;
  z-index: 3
}
@media (min-width:480px) {
  .plyr--video .plyr__controls {
    padding: 10px;
    padding: var(--plyr-control-spacing, 10px);
    padding-top: 35px;
    padding-top: calc(var(--plyr-control-spacing, 10px)*3.5)
  }
}
.plyr--video.plyr--hide-controls .plyr__controls {
  opacity: 0;
  pointer-events: none;
  transform: translateY(100%)
}
.plyr--video .plyr__control.plyr__tab-focus,
.plyr--video .plyr__control:hover,
.plyr--video .plyr__control[aria-expanded=true] {
  background: #00b2ff;
  background: var(--plyr-video-control-background-hover, var(--plyr-color-main, var(--plyr-color-main, #00b2ff)));
  color: #fff;
  color: var(--plyr-video-control-color-hover, #fff)
}
.plyr__control--overlaid {
  background: #00b2ff;
  background: var(--plyr-video-control-background-hover, var(--plyr-color-main, var(--plyr-color-main, #00b2ff)));
  border: 0;
  border-radius: 100%;
  color: #fff;
  color: var(--plyr-video-control-color, #fff);
  display: none;
  left: 50%;
  opacity: .9;
  padding: 15px;
  padding: calc(var(--plyr-control-spacing, 10px)*1.5);
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  transition: .3s;
  z-index: 2
}
.plyr__control--overlaid svg {
  left: 2px;
  position: relative
}
.plyr__control--overlaid:focus,
.plyr__control--overlaid:hover {
  opacity: 1
}
.plyr--playing .plyr__control--overlaid {
  opacity: 0;
  visibility: hidden
}
.plyr--full-ui.plyr--video .plyr__control--overlaid {
  display: block
}
.plyr--full-ui.plyr--video input[type=range]::-webkit-slider-runnable-track {
  background-color: hsla(0, 0%, 100%, .25);
  background-color: var(--plyr-video-range-track-background, var(--plyr-video-progress-buffered-background, hsla(0, 0%, 100%, .25)))
}
.plyr--full-ui.plyr--video input[type=range]::-moz-range-track {
  background-color: hsla(0, 0%, 100%, .25);
  background-color: var(--plyr-video-range-track-background, var(--plyr-video-progress-buffered-background, hsla(0, 0%, 100%, .25)))
}
.plyr--full-ui.plyr--video input[type=range]::-ms-track {
  background-color: hsla(0, 0%, 100%, .25);
  background-color: var(--plyr-video-range-track-background, var(--plyr-video-progress-buffered-background, hsla(0, 0%, 100%, .25)))
}
.plyr--full-ui.plyr--video input[type=range]:active::-webkit-slider-thumb {
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2), 0 0 0 3px hsla(0, 0%, 100%, .5);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2)), 0 0 0 var(--plyr-range-thumb-active-shadow-width, 3px) var(--plyr-audio-range-thumb-active-shadow-color, hsla(0, 0%, 100%, .5))
}
.plyr--full-ui.plyr--video input[type=range]:active::-moz-range-thumb {
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2), 0 0 0 3px hsla(0, 0%, 100%, .5);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2)), 0 0 0 var(--plyr-range-thumb-active-shadow-width, 3px) var(--plyr-audio-range-thumb-active-shadow-color, hsla(0, 0%, 100%, .5))
}
.plyr--full-ui.plyr--video input[type=range]:active::-ms-thumb {
  box-shadow: 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2), 0 0 0 3px hsla(0, 0%, 100%, .5);
  box-shadow: var(--plyr-range-thumb-shadow, 0 1px 1px rgba(35, 40, 47, .15), 0 0 0 1px rgba(35, 40, 47, .2)), 0 0 0 var(--plyr-range-thumb-active-shadow-width, 3px) var(--plyr-audio-range-thumb-active-shadow-color, hsla(0, 0%, 100%, .5))
}
.plyr--video .plyr__progress__buffer {
  color: hsla(0, 0%, 100%, .25);
  color: var(--plyr-video-progress-buffered-background, hsla(0, 0%, 100%, .25))
}
.plyr:fullscreen {
  background: #000;
  border-radius: 0 !important;
  height: 100%;
  margin: 0;
  width: 100%
}
.plyr:fullscreen video {
  height: 100%
}
.plyr:fullscreen .plyr__control .icon--exit-fullscreen {
  display: block
}
.plyr:fullscreen .plyr__control .icon--exit-fullscreen+svg {
  display: none
}
.plyr:fullscreen.plyr--hide-controls {
  cursor: none
}
@media (min-width:1024px) {
  .plyr:fullscreen .plyr__captions {
    font-size: 21px;
    font-size: var(--plyr-font-size-xlarge, 21px)
  }
}
.plyr--fullscreen-fallback {
  background: #000;
  border-radius: 0 !important;
  bottom: 0;
  display: block;
  height: 100%;
  left: 0;
  margin: 0;
  position: fixed;
  right: 0;
  top: 0;
  width: 100%;
  z-index: 10000000
}
.plyr--fullscreen-fallback video {
  height: 100%
}
.plyr--fullscreen-fallback .plyr__control .icon--exit-fullscreen {
  display: block
}
.plyr--fullscreen-fallback .plyr__control .icon--exit-fullscreen+svg {
  display: none
}
.plyr--fullscreen-fallback.plyr--hide-controls {
  cursor: none
}
@media (min-width:1024px) {
  .plyr--fullscreen-fallback .plyr__captions {
    font-size: 21px;
    font-size: var(--plyr-font-size-xlarge, 21px)
  }
}
.plyr__ads {
  border-radius: inherit;
  bottom: 0;
  cursor: pointer;
  left: 0;
  overflow: hidden;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1
}
.plyr__ads>div,
.plyr__ads>div iframe {
  height: 100%;
  position: absolute;
  width: 100%
}
.plyr__ads:after {
  background: #23282f;
  border-radius: 2px;
  bottom: 10px;
  bottom: var(--plyr-control-spacing, 10px);
  color: #fff;
  content: attr(data-badge-text);
  font-size: 11px;
  padding: 2px 6px;
  pointer-events: none;
  position: absolute;
  right: 10px;
  right: var(--plyr-control-spacing, 10px);
  z-index: 3
}
.plyr__ads:empty:after {
  display: none
}
.plyr__cues {
  background: currentColor;
  display: block;
  height: 5px;
  height: var(--plyr-range-track-height, 5px);
  left: 0;
  opacity: .8;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 3px;
  z-index: 3
}
.plyr__preview-thumb {
  background-color: hsla(0, 0%, 100%, .9);
  background-color: var(--plyr-tooltip-background, hsla(0, 0%, 100%, .9));
  border-radius: 5px;
  border-radius: var(--plyr-tooltip-radius, 5px);
  bottom: 100%;
  box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
  box-shadow: var(--plyr-tooltip-shadow, 0 1px 2px rgba(0, 0, 0, .15));
  margin-bottom: 10px;
  margin-bottom: calc(var(--plyr-control-spacing, 10px)/2*2);
  opacity: 0;
  padding: 3px;
  pointer-events: none;
  position: absolute;
  transform: translateY(10px) scale(.8);
  transform-origin: 50% 100%;
  transition: transform .2s ease .1s, opacity .2s ease .1s;
  z-index: 2
}
.plyr__preview-thumb--is-shown {
  opacity: 1;
  transform: translate(0) scale(1)
}
.plyr__preview-thumb:before {
  border-left: 4px solid transparent;
  border-left: var(--plyr-tooltip-arrow-size, 4px) solid transparent;
  border-right: 4px solid transparent;
  border-right: var(--plyr-tooltip-arrow-size, 4px) solid transparent;
  border-top: 4px solid hsla(0, 0%, 100%, .9);
  border-top: var(--plyr-tooltip-arrow-size, 4px) solid var(--plyr-tooltip-background, hsla(0, 0%, 100%, .9));
  bottom: -4px;
  bottom: calc(var(--plyr-tooltip-arrow-size, 4px)*-1);
  content: "";
  height: 0;
  left: calc(50% + var(--preview-arrow-offset));
  position: absolute;
  transform: translateX(-50%);
  width: 0;
  z-index: 2
}
.plyr__preview-thumb__image-container {
  background: #c1c8d1;
  border-radius: 4px;
  border-radius: calc(var(--plyr-tooltip-radius, 5px) - 1px);
  overflow: hidden;
  position: relative;
  z-index: 0
}
.plyr__preview-thumb__image-container img,
.plyr__preview-thumb__image-container:after {
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%
}
.plyr__preview-thumb__image-container:after {
  border-radius: inherit;
  box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .15);
  content: "";
  pointer-events: none
}
.plyr__preview-thumb__image-container img {
  max-height: none;
  max-width: none
}
.plyr__preview-thumb__time-container {
  background: linear-gradient(transparent, rgba(0, 0, 0, .75));
  background: var(--plyr-video-controls-background, linear-gradient(transparent, rgba(0, 0, 0, .75)));
  border-bottom-left-radius: 4px;
  border-bottom-left-radius: calc(var(--plyr-tooltip-radius, 5px) - 1px);
  border-bottom-right-radius: 4px;
  border-bottom-right-radius: calc(var(--plyr-tooltip-radius, 5px) - 1px);
  bottom: 0;
  left: 0;
  line-height: 1.1;
  padding: 20px 6px 6px;
  position: absolute;
  right: 0;
  z-index: 3
}
.plyr__preview-thumb__time-container span {
  color: #fff;
  font-size: 13px;
  font-size: var(--plyr-font-size-time, var(--plyr-font-size-small, 13px))
}
.plyr__preview-scrubbing {
  bottom: 0;
  filter: blur(1px);
  height: 100%;
  left: 0;
  margin: auto;
  opacity: 0;
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  right: 0;
  top: 0;
  transition: opacity .3s ease;
  width: 100%;
  z-index: 1
}
.plyr__preview-scrubbing--is-shown {
  opacity: 1
}
.plyr__preview-scrubbing img {
  height: 100%;
  left: 0;
  max-height: none;
  max-width: none;
  -o-object-fit: contain;
  object-fit: contain;
  position: absolute;
  top: 0;
  width: 100%
}
.plyr--no-transition {
  transition: none !important
}
.plyr__sr-only {
  clip: rect(1px, 1px, 1px, 1px);
  border: 0 !important;
  height: 1px !important;
  overflow: hidden;
  padding: 0 !important;
  position: absolute !important;
  width: 1px !important
}
.plyr [hidden] {
  display: none !important
}
/* PrismJS 1.24.1 */
code[class*="language-"],
pre[class*="language-"] {
  color: #4EC9B0;
  background: none;
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  -webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: auto;
  font-size: 1em;
  text-align: left;
  white-space: pre-wrap;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;
  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;
  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}
/* Code blocks */
pre[class*="language-"] {
  padding: 1em;
  margin: .5em 0;
  overflow: auto;
}
:not(pre)>code[class*="language-"],
pre[class*="language-"] {
  background: #2d2d2d;
}
/* Inline code */
:not(pre)>code[class*="language-"] {
  padding: .1em;
  border-radius: .3em;
  white-space: normal;
}
.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #999;
}
.token.punctuation {
  color: #ccc;
}
.token.tag {
  color: #DCDCDC;
}
.token.attr-name,
.token.namespace,
.token.deleted {
  color: #569CD6;
}
.token.function-name {
  color: #DCDCDC;
}
.token.boolean,
.token.number,
.token.function {
  color: #f08d49;
}
.token.property,
.token.class-name,
.token.constant,
.token.symbol {
  color: #f8c555;
}
.token.selector,
.token.important,
.token.atrule,
.token.keyword,
.token.builtin {
  color: #cc99cd;
}
.token.string,
.token.char,
.token.attr-value,
.token.regex,
.token.variable {
  color: #D69D85;
}
.token.operator,
.token.entity,
.token.url {
  color: #67cdcc;
}
.token.important,
.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}
.token.entity {
  cursor: help;
}
.token.inserted {
  color: green;
}
/*!
 * scrollCue.js v2.0.0
 * https://github.com/prjct-samwest/scrollCue
 */
[data-cue=fadeIn],
[data-cues=fadeIn]>* {
  opacity: 0
}
@keyframes fadeIn {
  from {
    opacity: 0
  }
  to {
    opacity: 1
  }
}
[data-cue=slideInLeft],
[data-cues=slideInLeft]>* {
  opacity: 0
}
@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-30px)
  }
  to {
    opacity: 1;
    transform: translateX(0)
  }
}
[data-cue=slideInRight],
[data-cues=slideInRight]>* {
  opacity: 0
}
@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(30px)
  }
  to {
    opacity: 1;
    transform: translateX(0)
  }
}
[data-cue=slideInDown],
[data-cues=slideInDown]>* {
  opacity: 0
}
@keyframes slideInDown {
  from {
    opacity: 0;
    transform: translateY(-30px)
  }
  to {
    opacity: 1;
    transform: translateY(0)
  }
}
[data-cue=slideInUp],
[data-cues=slideInUp]>* {
  opacity: 0
}
@keyframes slideInUp {
  from {
    opacity: 0;
    transform: translateY(30px)
  }
  to {
    opacity: 1;
    transform: translateY(0)
  }
}
[data-cue=zoomIn],
[data-cues=zoomIn]>* {
  opacity: 0
}
@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale(.8)
  }
  to {
    opacity: 1;
    transform: scale(1)
  }
}
[data-cue=zoomOut],
[data-cues=zoomOut]>* {
  opacity: 0
}
@keyframes zoomOut {
  from {
    opacity: 0;
    transform: scale(1.2)
  }
  to {
    opacity: 1;
    transform: scale(1)
  }
}
[data-cue=rotateIn],
[data-cues=rotateIn]>* {
  opacity: 0
}
@keyframes rotateIn {
  from {
    opacity: 0;
    transform: rotateZ(-15deg)
  }
  to {
    opacity: 1;
    transform: rotateZ(0)
  }
}
[data-cue=bounceIn],
[data-cues=bounceIn]>* {
  opacity: 0
}
@keyframes bounceIn {
  0% {
    transform: scale3d(.3, .3, .3)
  }
  20% {
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    transform: scale3d(.9, .9, .9)
  }
  60% {
    opacity: 1;
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    transform: scale3d(.97, .97, .97)
  }
  100% {
    opacity: 1;
    transform: scale3d(1, 1, 1)
  }
}
[data-cue=bounceInLeft],
[data-cues=bounceInLeft]>* {
  opacity: 0
}
@keyframes bounceInLeft {
  60%,
  75%,
  90%,
  from,
  to {
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    transform: translate3d(-3000px, 0, 0)
  }
  60% {
    opacity: 1;
    transform: translate3d(25px, 0, 0)
  }
  75% {
    transform: translate3d(-10px, 0, 0)
  }
  90% {
    transform: translate3d(5px, 0, 0)
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0)
  }
}
[data-cue=bounceInRight],
[data-cues=bounceInRight]>* {
  opacity: 0
}
@keyframes bounceInRight {
  60%,
  75%,
  90%,
  from,
  to {
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  from {
    opacity: 0;
    transform: translate3d(3000px, 0, 0)
  }
  60% {
    opacity: 1;
    transform: translate3d(-25px, 0, 0)
  }
  75% {
    transform: translate3d(10px, 0, 0)
  }
  90% {
    transform: translate3d(-5px, 0, 0)
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0)
  }
}
[data-cue=bounceInDown],
[data-cues=bounceInDown]>* {
  opacity: 0
}
@keyframes bounceInDown {
  60%,
  75%,
  90%,
  from,
  to {
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  0% {
    opacity: 0;
    transform: translate3d(0, -3000px, 0)
  }
  60% {
    opacity: 1;
    transform: translate3d(0, 25px, 0)
  }
  75% {
    transform: translate3d(0, -10px, 0)
  }
  90% {
    transform: translate3d(0, 5px, 0)
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0)
  }
}
[data-cue=bounceInUp],
[data-cues=bounceInUp]>* {
  opacity: 0
}
@keyframes bounceInUp {
  60%,
  75%,
  90%,
  from,
  to {
    animation-timing-function: cubic-bezier(.215, .61, .355, 1)
  }
  from {
    opacity: 0;
    transform: translate3d(0, 3000px, 0)
  }
  60% {
    opacity: 1;
    transform: translate3d(0, -20px, 0)
  }
  75% {
    transform: translate3d(0, 10px, 0)
  }
  90% {
    transform: translate3d(0, -5px, 0)
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0)
  }
}
[data-cue=flipInX],
[data-cues=flipInX]>* {
  opacity: 0;
  backface-visibility: visible
}
@keyframes flipInX {
  from {
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    animation-timing-function: ease-in;
    opacity: 0
  }
  40% {
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    animation-timing-function: ease-in
  }
  60% {
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1
  }
  80% {
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
  }
  to {
    opacity: 1;
    transform: perspective(400px)
  }
}
[data-cue=flipInY],
[data-cues=flipInY]>* {
  opacity: 0;
  backface-visibility: visible
}
@keyframes flipInY {
  from {
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    animation-timing-function: ease-in;
    opacity: 0
  }
  40% {
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    animation-timing-function: ease-in
  }
  60% {
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1
  }
  80% {
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
  }
  to {
    opacity: 1;
    transform: perspective(400px)
  }
}
/**
 * Swiper 8.3.2
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2022 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: July 26, 2022
 */
@font-face {
  font-family: swiper-icons;
  src: url('data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA');
  font-weight: 400;
  font-style: normal
}
:root {
  --swiper-theme-color: #007aff
}
.swiper {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  overflow: hidden;
  list-style: none;
  padding: 0;
  z-index: 1
}
.swiper-vertical>.swiper-wrapper {
  flex-direction: column
}
.swiper-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: flex;
  transition-property: transform;
  box-sizing: content-box
}
.swiper-android .swiper-slide,
.swiper-wrapper {
  transform: translate3d(0px, 0, 0)
}
.swiper-pointer-events {
  touch-action: pan-y
}
.swiper-pointer-events.swiper-vertical {
  touch-action: pan-x
}
.swiper-slide {
  flex-shrink: 0;
  width: 100%;
  height: 100%;
  position: relative;
  transition-property: transform
}
.swiper-slide-invisible-blank {
  visibility: hidden
}
.swiper-autoheight,
.swiper-autoheight .swiper-slide {
  height: auto
}
.swiper-autoheight .swiper-wrapper {
  align-items: flex-start;
  transition-property: transform, height
}
.swiper-backface-hidden .swiper-slide {
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden
}
.swiper-3d,
.swiper-3d.swiper-css-mode .swiper-wrapper {
  perspective: 1200px
}
.swiper-3d .swiper-cube-shadow,
.swiper-3d .swiper-slide,
.swiper-3d .swiper-slide-shadow,
.swiper-3d .swiper-slide-shadow-bottom,
.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right,
.swiper-3d .swiper-slide-shadow-top,
.swiper-3d .swiper-wrapper {
  transform-style: preserve-3d
}
.swiper-3d .swiper-slide-shadow,
.swiper-3d .swiper-slide-shadow-bottom,
.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right,
.swiper-3d .swiper-slide-shadow-top {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 10
}
.swiper-3d .swiper-slide-shadow {
  background: rgba(0, 0, 0, .15)
}
.swiper-3d .swiper-slide-shadow-left {
  background-image: linear-gradient(to left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}
.swiper-3d .swiper-slide-shadow-right {
  background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}
.swiper-3d .swiper-slide-shadow-top {
  background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}
.swiper-3d .swiper-slide-shadow-bottom {
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
}
.swiper-css-mode>.swiper-wrapper {
  overflow: auto;
  scrollbar-width: none;
  -ms-overflow-style: none
}
.swiper-css-mode>.swiper-wrapper::-webkit-scrollbar {
  display: none
}
.swiper-css-mode>.swiper-wrapper>.swiper-slide {
  scroll-snap-align: start start
}
.swiper-horizontal.swiper-css-mode>.swiper-wrapper {
  scroll-snap-type: x mandatory
}
.swiper-vertical.swiper-css-mode>.swiper-wrapper {
  scroll-snap-type: y mandatory
}
.swiper-centered>.swiper-wrapper::before {
  content: '';
  flex-shrink: 0;
  order: 9999
}
.swiper-centered.swiper-horizontal>.swiper-wrapper>.swiper-slide:first-child {
  margin-inline-start: var(--swiper-centered-offset-before)
}
.swiper-centered.swiper-horizontal>.swiper-wrapper::before {
  height: 100%;
  min-height: 1px;
  width: var(--swiper-centered-offset-after)
}
.swiper-centered.swiper-vertical>.swiper-wrapper>.swiper-slide:first-child {
  margin-block-start: var(--swiper-centered-offset-before)
}
.swiper-centered.swiper-vertical>.swiper-wrapper::before {
  width: 100%;
  min-width: 1px;
  height: var(--swiper-centered-offset-after)
}
.swiper-centered>.swiper-wrapper>.swiper-slide {
  scroll-snap-align: center center
}
.swiper-virtual .swiper-slide {
  -webkit-backface-visibility: hidden;
  transform: translateZ(0)
}
.swiper-virtual.swiper-css-mode .swiper-wrapper::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  pointer-events: none
}
.swiper-virtual.swiper-css-mode.swiper-horizontal .swiper-wrapper::after {
  height: 1px;
  width: var(--swiper-virtual-size)
}
.swiper-virtual.swiper-css-mode.swiper-vertical .swiper-wrapper::after {
  width: 1px;
  height: var(--swiper-virtual-size)
}
:root {
  --swiper-navigation-size: 44px
}
.swiper-button-next,
.swiper-button-prev {
  position: absolute;
  top: 50%;
  width: calc(var(--swiper-navigation-size)/ 44 * 27);
  height: var(--swiper-navigation-size);
  margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
  z-index: 10;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--swiper-navigation-color, var(--swiper-theme-color))
}
.swiper-button-next.swiper-button-disabled,
.swiper-button-prev.swiper-button-disabled {
  opacity: .35;
  cursor: auto;
  pointer-events: none
}
.swiper-button-next.swiper-button-hidden,
.swiper-button-prev.swiper-button-hidden {
  opacity: 0;
  cursor: auto;
  pointer-events: none
}
.swiper-navigation-disabled .swiper-button-next,
.swiper-navigation-disabled .swiper-button-prev {
  display: none !important
}
.swiper-button-next:after,
.swiper-button-prev:after {
  font-family: swiper-icons;
  font-size: var(--swiper-navigation-size);
  text-transform: none !important;
  letter-spacing: 0;
  font-variant: initial;
  line-height: 1
}
.swiper-button-prev,
.swiper-rtl .swiper-button-next {
  left: 10px;
  right: auto
}
.swiper-button-prev:after,
.swiper-rtl .swiper-button-next:after {
  content: 'prev'
}
.swiper-button-next,
.swiper-rtl .swiper-button-prev {
  right: 10px;
  left: auto
}
.swiper-button-next:after,
.swiper-rtl .swiper-button-prev:after {
  content: 'next'
}
.swiper-button-lock {
  display: none
}
.swiper-pagination {
  position: absolute;
  text-align: center;
  transition: .3s opacity;
  transform: translate3d(0, 0, 0);
  z-index: 10
}
.swiper-pagination.swiper-pagination-hidden {
  opacity: 0
}
.swiper-pagination-disabled>.swiper-pagination,
.swiper-pagination.swiper-pagination-disabled {
  display: none !important
}
.swiper-horizontal>.swiper-pagination-bullets,
.swiper-pagination-bullets.swiper-pagination-horizontal,
.swiper-pagination-custom,
.swiper-pagination-fraction {
  bottom: 10px;
  left: 0;
  width: 100%
}
.swiper-pagination-bullets-dynamic {
  overflow: hidden;
  font-size: 0
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  transform: scale(.33);
  position: relative
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
  transform: scale(1)
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
  transform: scale(1)
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
  transform: scale(.66)
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
  transform: scale(.33)
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
  transform: scale(.66)
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
  transform: scale(.33)
}
.swiper-pagination-bullet {
  width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 8px));
  height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 8px));
  display: inline-block;
  border-radius: 50%;
  background: var(--swiper-pagination-bullet-inactive-color, #000);
  opacity: var(--swiper-pagination-bullet-inactive-opacity, .2)
}
button.swiper-pagination-bullet {
  border: none;
  margin: 0;
  padding: 0;
  box-shadow: none;
  -webkit-appearance: none;
  appearance: none
}
.swiper-pagination-clickable .swiper-pagination-bullet {
  cursor: pointer
}
.swiper-pagination-bullet:only-child {
  display: none !important
}
.swiper-pagination-bullet-active {
  opacity: var(--swiper-pagination-bullet-opacity, 1);
  background: var(--swiper-pagination-color, var(--swiper-theme-color))
}
.swiper-pagination-vertical.swiper-pagination-bullets,
.swiper-vertical>.swiper-pagination-bullets {
  right: 10px;
  top: 50%;
  transform: translate3d(0px, -50%, 0)
}
.swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet,
.swiper-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
  margin: var(--swiper-pagination-bullet-vertical-gap, 6px) 0;
  display: block
}
.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,
.swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
  top: 50%;
  transform: translateY(-50%);
  width: 8px
}
.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,
.swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  display: inline-block;
  transition: .2s transform, .2s top
}
.swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
.swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
}
.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,
.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
  left: 50%;
  transform: translateX(-50%);
  white-space: nowrap
}
.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,
.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  transition: .2s transform, .2s left
}
.swiper-horizontal.swiper-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  transition: .2s transform, .2s right
}
.swiper-pagination-progressbar {
  background: rgba(0, 0, 0, .25);
  position: absolute
}
.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  background: var(--swiper-pagination-color, var(--swiper-theme-color));
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transform-origin: left top
}
.swiper-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  transform-origin: right top
}
.swiper-horizontal>.swiper-pagination-progressbar,
.swiper-pagination-progressbar.swiper-pagination-horizontal,
.swiper-pagination-progressbar.swiper-pagination-vertical.swiper-pagination-progressbar-opposite,
.swiper-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
  width: 100%;
  height: 4px;
  left: 0;
  top: 0
}
.swiper-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,
.swiper-pagination-progressbar.swiper-pagination-horizontal.swiper-pagination-progressbar-opposite,
.swiper-pagination-progressbar.swiper-pagination-vertical,
.swiper-vertical>.swiper-pagination-progressbar {
  width: 4px;
  height: 100%;
  left: 0;
  top: 0
}
.swiper-pagination-lock {
  display: none
}
.swiper-scrollbar {
  border-radius: 10px;
  position: relative;
  -ms-touch-action: none;
  background: rgba(0, 0, 0, .1)
}
.swiper-scrollbar-disabled>.swiper-scrollbar,
.swiper-scrollbar.swiper-scrollbar-disabled {
  display: none !important
}
.swiper-horizontal>.swiper-scrollbar,
.swiper-scrollbar.swiper-scrollbar-horizontal {
  position: absolute;
  left: 1%;
  bottom: 3px;
  z-index: 50;
  height: 5px;
  width: 98%
}
.swiper-scrollbar.swiper-scrollbar-vertical,
.swiper-vertical>.swiper-scrollbar {
  position: absolute;
  right: 3px;
  top: 1%;
  z-index: 50;
  width: 5px;
  height: 98%
}
.swiper-scrollbar-drag {
  height: 100%;
  width: 100%;
  position: relative;
  background: rgba(0, 0, 0, .5);
  border-radius: 10px;
  left: 0;
  top: 0
}
.swiper-scrollbar-cursor-drag {
  cursor: move
}
.swiper-scrollbar-lock {
  display: none
}
.swiper-zoom-container {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center
}
.swiper-zoom-container>canvas,
.swiper-zoom-container>img,
.swiper-zoom-container>svg {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain
}
.swiper-slide-zoomed {
  cursor: move
}
.swiper-lazy-preloader {
  width: 42px;
  height: 42px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -21px;
  margin-top: -21px;
  z-index: 10;
  transform-origin: 50%;
  box-sizing: border-box;
  border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
  border-radius: 50%;
  border-top-color: transparent
}
.swiper-watch-progress .swiper-slide-visible .swiper-lazy-preloader,
.swiper:not(.swiper-watch-progress) .swiper-lazy-preloader {
  animation: swiper-preloader-spin 1s infinite linear
}
.swiper-lazy-preloader-white {
  --swiper-preloader-color: #fff
}
.swiper-lazy-preloader-black {
  --swiper-preloader-color: #000
}
@keyframes swiper-preloader-spin {
  0% {
    transform: rotate(0deg)
  }
  100% {
    transform: rotate(360deg)
  }
}
.swiper .swiper-notification {
  position: absolute;
  left: 0;
  top: 0;
  pointer-events: none;
  opacity: 0;
  z-index: -1000
}
.swiper-free-mode>.swiper-wrapper {
  transition-timing-function: ease-out;
  margin: 0 auto
}
.swiper-grid>.swiper-wrapper {
  flex-wrap: wrap
}
.swiper-grid-column>.swiper-wrapper {
  flex-wrap: wrap;
  flex-direction: column
}
.swiper-fade.swiper-free-mode .swiper-slide {
  transition-timing-function: ease-out
}
.swiper-fade .swiper-slide {
  pointer-events: none;
  transition-property: opacity
}
.swiper-fade .swiper-slide .swiper-slide {
  pointer-events: none
}
.swiper-fade .swiper-slide-active,
.swiper-fade .swiper-slide-active .swiper-slide-active {
  pointer-events: auto
}
.swiper-cube {
  overflow: visible
}
.swiper-cube .swiper-slide {
  pointer-events: none;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1;
  visibility: hidden;
  transform-origin: 0 0;
  width: 100%;
  height: 100%
}
.swiper-cube .swiper-slide .swiper-slide {
  pointer-events: none
}
.swiper-cube.swiper-rtl .swiper-slide {
  transform-origin: 100% 0
}
.swiper-cube .swiper-slide-active,
.swiper-cube .swiper-slide-active .swiper-slide-active {
  pointer-events: auto
}
.swiper-cube .swiper-slide-active,
.swiper-cube .swiper-slide-next,
.swiper-cube .swiper-slide-next+.swiper-slide,
.swiper-cube .swiper-slide-prev {
  pointer-events: auto;
  visibility: visible
}
.swiper-cube .swiper-slide-shadow-bottom,
.swiper-cube .swiper-slide-shadow-left,
.swiper-cube .swiper-slide-shadow-right,
.swiper-cube .swiper-slide-shadow-top {
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden
}
.swiper-cube .swiper-cube-shadow {
  position: absolute;
  left: 0;
  bottom: 0px;
  width: 100%;
  height: 100%;
  opacity: .6;
  z-index: 0
}
.swiper-cube .swiper-cube-shadow:before {
  content: '';
  background: #000;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  filter: blur(50px)
}
.swiper-flip {
  overflow: visible
}
.swiper-flip .swiper-slide {
  pointer-events: none;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1
}
.swiper-flip .swiper-slide .swiper-slide {
  pointer-events: none
}
.swiper-flip .swiper-slide-active,
.swiper-flip .swiper-slide-active .swiper-slide-active {
  pointer-events: auto
}
.swiper-flip .swiper-slide-shadow-bottom,
.swiper-flip .swiper-slide-shadow-left,
.swiper-flip .swiper-slide-shadow-right,
.swiper-flip .swiper-slide-shadow-top {
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden
}
.swiper-creative .swiper-slide {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  overflow: hidden;
  transition-property: transform, opacity, height
}
.swiper-cards {
  overflow: visible
}
.swiper-cards .swiper-slide {
  transform-origin: center bottom;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  overflow: hidden
}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
  </style>