<template>
  <article class="s4">
    <div class="pic">
      <img src="./s4/pic.jpg" alt="pic">
    </div>
    <div class="text">
      <img class="bg" src="./s4/line.svg" alt="bg">
      <div class="text-content">
        <div class="item">
          <h3>安和大道</h3>
          <hr>
          <p>核心居域享繁華</p>
        </div>
        <div class="item">
          <h3>安和大道</h3>
          <hr>
          <p>核心居域享繁華</p>
        </div>
        <div class="item">
          <h3>安和大道</h3>
          <hr>
          <p>核心居域享繁華</p>
        </div>
        <div class="item">
          <h3>安和大道</h3>
          <hr>
          <p>核心居域享繁華</p>
        </div>
        <div class="item">
          <h3>安和大道</h3>
          <hr>
          <p>核心居域享繁華</p>
        </div>
        <div class="item">
          <h3>安和大道</h3>
          <hr>
          <p>核心居域享繁華</p>
        </div>
      </div>
    </div>
  </article>
</template>

<style lang="scss" scoped>
@import "@/assets/style/function.scss";

.s4 {
  position: relative;

  .pic {
    width: 50%;
    margin-left: auto;

    img {
      width: 100%;
    }
  }

  .text {
    padding: size(95) size(110);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
      align-items: center;

    .bg {
      width: calc(100% - size(110) - size(110));
      position: absolute;
      top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .text-content {
      display: flex;
      .item{
        width: size(180);
        height: size(180);
        border: 1px solid #3B8281;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100%;
      }
    }

    // background-image: url(./s4/line.svg);
    // background-size: 100%;
  }
}
</style>
