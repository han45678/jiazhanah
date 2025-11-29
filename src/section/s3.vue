<template>
  <article class="s3">
    <!-- <img src="./s3/enm.svg" class="en" data-aos="zoom-in" data-aos-delay="0" v-if="isMobile">
    <img src="./s3/en.svg" class="en" data-aos="zoom-in" data-aos-delay="0" v-else> -->

    <div class="txt font-['Noto_Serif_TC',serif]">
      <h2>安南匯聚四大園區</h2>
      <img class="line" src="./s3/line.svg" alt="line">
      <p>
        台南科技工業區、和順工業區、新吉工業區、總頭寮工業區，攜手南科全球半導體聚落共榮，領航台南經濟命脈。重大建設推動城市升級，繁榮新景持續擴展，坐享宜居優勢，未來增值無限。
      </p>
    </div>
    <div class="_viewbox">
      <fullview v-if="0" />
    </div>
  </article>
</template>

<style lang="scss" scoped>
@import "@/assets/style/function.scss";

.s3 {
  display: flex;

  @media screen and (min-width: 768px) {
    justify-content: center;
    gap: size(285);
    padding: size(165);
  }

  .txt {
    padding: sizem(70) sizem(40);
    width: 100%;
    box-sizing: border-box;

    @media screen and (min-width: 768px) {
      padding: 0 0 0 size(15);
      width: size(345);
      order: 2;
    }

    h2 {
      position: relative;

      &::before {
        content: '';
        background-image: url(./s3/title_line_m.svg);
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: left center;
        width: 100%;
        height: 100%;

        @media screen and (min-width: 768px) {
          background-image: url(./s3/title_line.svg);
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

      @media screen and (min-width: 768px) {
        font-size: size(18);
        padding-left: 0;
        padding-right: 0;
      }
    }
  }

  ._viewbox {
    @media screen and (min-width: 768px) {
      width: size(900);
      order: 1;
    }
  }
}
</style>

<script setup>
import fullview from "@/components/fullview.vue"
import { computed, getCurrentInstance, ref, inject, onMounted } from "vue"
const globals = getCurrentInstance().appContext.config.globalProperties
const isMobile = computed(() => globals.$isMobile())
</script>