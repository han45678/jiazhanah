<template>
  <article class="s6">
    <div class="txt-box">
      <div class="title-en">WHERE DREAMS LIVE</div>

      <h2 class="title-tw">
        安享便捷<br>
        5分鐘北外環道
      </h2>

      <p class="desc">
        安和路寬達24米，交通四通八達，駕車約5分鐘即可順接北外環道、捷運南科、國道1號、國道8號，通勤移動效率滿分，南北奔馳更快意。
      </p>
    </div>

    <div class="img-box">
      <img class="main-pic" src="@/assets/img/s6.jpg" alt="">
      <span class="tag">現場實景拍攝</span>
    </div>
  </article>
</template>


<style lang="scss" scoped>
@import "@/assets/style/function.scss";

.s6 {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: size(80) 0;
  position: relative;

  // === PC 版排版 ===
  @media (min-width: 768px) {
    flex-direction: row;
    gap: size(80);
  }

  // === Mobile 版排版 ===
  @media (max-width: 767px) {
    flex-direction: column;
    padding: sizem(40) sizem(20);
    gap: sizem(40);
  }

  // 文字區域
  .txt-box {
    max-width: size(480);

    @media (max-width: 767px) {
      max-width: 100%;
      text-align: center;
    }

    .title-en {
      font-size: size(20);
      letter-spacing: size(2);
      margin-bottom: size(20);

      @media (max-width: 767px) {
        font-size: sizem(14);
        margin-bottom: sizem(10);
      }
    }

    .title-tw {
      font-size: size(36);
      line-height: 1.3;
      margin-bottom: size(30);

      @media (max-width: 767px) {
        font-size: sizem(24);
        margin-bottom: sizem(20);
      }
    }

    .desc {
      font-size: size(20);
      line-height: 1.6;
      color: #444;

      @media (max-width: 767px) {
        font-size: sizem(16);
        line-height: 1.7;
      }
    }
  }

  // 圖片區域
  .img-box {
    position: relative;
    width: size(800);

    @media (max-width: 767px) {
      width: 100%;
    }

    .main-pic {
      width: 100%;
      border-radius: size(8);

      @media (max-width: 767px) {
        border-radius: sizem(8);
      }
    }

    .tag {
      position: absolute;
      bottom: size(20);
      right: size(20);
      font-size: size(16);
      color: #fff;
      background: rgba(0,0,0,.45);
      padding: size(8) size(12);
      border-radius: size(4);

      @media (max-width: 767px) {
        bottom: sizem(12);
        right: sizem(12);
        font-size: sizem(12);
        padding: sizem(6) sizem(10);
        border-radius: sizem(4);
      }
    }
  }
}
</style>
