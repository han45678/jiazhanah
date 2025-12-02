<template>
  <article class="s11">
    <div class="txt font-['Noto_Serif_TC',serif]">
      <h2><span data-aos="fade-up">安適生活 繁華3大商圈</span></h2>
      <img class="line" src="./s3/line.svg" alt="line">
      <p>
        <span data-aos="fade-up">安和路黃金機能圈，吃喝玩樂全包辦。輕車可達和順、安和路、北安路3大商圈，日常所需盡善盡美。連鎖超市、完善學區、醫療院所通通有，便利生活輕鬆享。</span>
      </p>
    </div>
    <div class="pic">
      <div>
        <img src="./s11/pic01.png" alt="pic">
      </div>
      <div>
        <img src="./s11/pic02.png" alt="pic">
      </div>
    </div>

  </article>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.s11 {
  display: flex;
  flex-wrap: wrap;
  background-image: url(./s7/bg.png);

  @media screen and (min-width: 768px) {
    justify-content: center;
    gap: size(90);
    padding: size(165) 0 0 size(165);
  }

  .txt {
    padding: sizem(70) sizem(40);
    width: 100%;
    box-sizing: border-box;

    @media screen and (min-width: 768px) {
      padding: 0 0 0 size(15);
      width: size(420);
      // order: 2;
    }

    h2 {
      position: relative;

      &::before {
        content: '';
        background-image: url(./s7/title_line_m.svg);
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: left center;
        width: 100%;
        height: 100%;

        @media screen and (min-width: 768px) {
          background-image: url(./s7/title_line.svg);
        }

        position: absolute;
        top: 0;
        left: 0;
      }

      font-size: sizem(20);
      padding-top: sizem(45);
      padding-left: sizem(10);

      @media screen and (min-width: 768px) {
        padding-top: size(175);
        padding-left: size(30);
        font-size: size(36);
        margin-bottom: size(20);
      }
    }

    .line {
      display: block;
      margin-left: sizem(60);
      margin-right: auto;
      width: sizem(48);
      margin-top: sizem(10);
      margin-bottom: sizem(10);

      @media screen and (min-width: 768px) {
        margin-left: auto;
        width: size(140);
        margin-bottom: size(20);
      }
    }

    p {
      line-height: 1.8;
      font-size: sizem(12);
      padding-left: sizem(10);
      padding-right: sizem(10);
      color: #4D4D4D;

      @media screen and (min-width: 768px) {
        font-size: size(18);
        padding-left: 0;
        padding-right: 0;
      }
    }
  }

  .pic {
    position: relative;
    overflow: visible;
    width: calc(100% - sizem(80));
    margin-left: auto;
    margin-right: auto;
    margin-bottom: sizem(40);
    display: flex;


    @media screen and (min-width: 768px) {
      width: size(1165);
      margin-bottom: 0
    }

  }

  .caption {
    color: #fff;
    font-weight: 600;
    font-size: sizem(10);
    bottom: sizem(10);
    right: sizem(10);
    position: absolute;

    @media screen and (min-width: 768px) {
      font-size: size(16);
      bottom: size(10);
      right: size(10);
    }
  }
}
</style>
