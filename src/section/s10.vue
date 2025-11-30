<template>
  <article class="s10">
    <div class="txt font-['Noto_Serif_TC',serif]">
      <h2>安享品味 嚴選國際建材</h2>
      <img class="line" src="./s3/line.svg" alt="line">
      <p>
        佳展建設精心打造十年里程碑代表作，精挑細選頂尖建材與配備，以精品工藝，開啟品味質感的每一天。
      </p>
    </div>
    <div class="pic">
      <img src="./s10/pic.jpg" alt="pic" />
    </div>
  </article>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.s10 {
  display: flex;
  flex-wrap: wrap;
  background-color: #E6E6E6;

  @media screen and (min-width: 768px) {
    justify-content: center;
    gap: size(200);
    padding: size(165);
  }

  .txt {
    padding: sizem(70) sizem(40);
    width: 100%;
    box-sizing: border-box;

    @media screen and (min-width: 768px) {
      padding: 0 0 0 size(15);
      width: size(450);
      order: 2;
    }

    h2 {
      position: relative;

      &::before {
        content: '';
        background-image: url(./s3/title_line_m.svg);
        background-size: sizem(290);
        background-repeat: no-repeat;
        background-position: left center;
        width: 100%;
        height: 100%;

        @media screen and (min-width: 768px) {
          background-image: url(./s3/title_line.svg);
          background-size: size(400);
        }

        position: absolute;
        top: 0;
        left: 0;
      }

      font-size: sizem(20);
      padding-top: sizem(45);
      padding-left: sizem(10);

      @media screen and (min-width: 768px) {
        padding-top: size(225);
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


    @media screen and (min-width: 768px) {
      width: size(725);
      order: 1;
      margin-bottom: 0
    }

    img {
      width: 100%;
    }

  }
}
</style>
