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

.s1 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100dvh;
  background: url("./s1/bgm.webp") center;
  background-size: cover;
  position: relative;

  @media screen and (min-width: 768px) {
    background-image: url("./s1/bg.webp");
    height: 100dvh;
    font-size: size(47);
  }

  .txt {
    position: absolute;
    padding-right: sizem(160);
    top: sizem(90);

    @media screen and (min-width: 768px) {
      padding-right: 0;
      top: size(150);
      left: 50%;
      transform: translateX(-50%);
      margin: auto;
    }

    img {
      display: block;
      max-width: 100%;

      &.logo {
        width: sizem(140);

        @media screen and (min-width: 768px) {
          width: size(300);
        }
      }

      &.t1 {
        margin-top: sizem(115);
        width: sizem(165);

        @media screen and (min-width: 768px) {
          margin-top: size(160);
          width: size(365);
        }
      }

      &.t2 {
        margin-top: sizem(20);
        width: sizem(100);

        @media screen and (min-width: 768px) {
          margin-top: size(43);
          width: size(215);
        }
      }

      &.t3 {
        margin-top: sizem(95);
        width: sizem(55);

        @media screen and (min-width: 768px) {
          margin-top: size(115);
          width: size(125);
        }
      }
    }
  }

  .right {
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;

    .bg {
      width: auto;
      height: 100%;
    }

    .bird {
      width: 100%;
      position: absolute;
      width: sizem(120);
      top: sizem(225);
      right: 18%;

      @media screen and (min-width: 768px) {
        width: size(240);
        top: size(360);
      }

      img {
        width: 100%;
      }
    }
  }


}
</style>