<template>
  <article class="s1 font-[Amiri,serif,'Noto_Serif_TC']" id="s1">
    <!-- data-aos="fade-up" data-aos-delay="800" data-aos-offset="-200" 160 45 115 -->
    <div class="txt">
      <img class="logo" src="./s1/logo.svg" alt="logo">
      <img class="t1" src="./s1/t1.svg" alt="text">
      <img class="t2" src="./s1/t2.svg" alt="text">
      <img class="t3" src="./s1/t3.svg" alt="text">
    </div>
    <div class="right">
      <img class="bg" src="./s1/right.webp" alt="right">
      <div class="bird">
        <img src="./s1/bird.webp" alt="bird">
      </div>
    </div>
  </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

@keyframes op {
  50% {
    opacity: 0;
  }
}

@keyframes an {
  to {
    transform: translateX(0%);
  }
}

.s1 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: sizem(605);
  background: url("./s1/bgm.webp") center;
  background-size: cover;
  position: relative;

  @media screen and (min-width: 768px) {
    background-image: url("./s1/bg.webp");
    height: 100vh;
    max-height: size(1080);
    min-height: size(900);
    font-size: size(47);
  }

  .txt {
    position: absolute;
    
    @media screen and (min-width: 768px) {
      top: size(150);
      left: 50%;
      transform: translateX(-50%);
      margin: auto;
    }

    img{
      display: block;
      &.t1{
        margin-top: 125px;
      }
      &.t2{
        margin-top: 45px;
      }
      &.t3{
        margin-top: 85px;
      }
    }
  }

  .right{
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    .bg{
      width: auto;
      height: 100%;
    }
    .bird{
      width: 100%;
      position: absolute;
    
      @media screen and (min-width: 768px) {
        width: size(240);
        top: size(360);
        right: size(130);
      }
      img{
        width: 100%;
      }
    }
  }


}
</style>
<script setup>
import { computed, getCurrentInstance, ref, inject } from 'vue';
const globals = getCurrentInstance().appContext.config.globalProperties;

const isMobile = computed(() => globals.$isMobile());

const smoothScroll = inject('smoothScroll')
const scrollTo = (el) => {
  smoothScroll({
    scrollTo: document.querySelector(el)
  })
}
</script>