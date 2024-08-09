<style>
  @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

  div {
    font-family: "Share Tech Mono", monospace;
  }

  .triangle-right {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 15px 0 15px 15px;
    border-color: transparent transparent transparent #b005b5;
    position: absolute;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
  }

  .triangle-left {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 15px 15px 15px 0;
    border-color: transparent #b005b5 transparent transparent;
    position: absolute;
    left: -15px;
    top: 50%;
    transform: translateY(-50%);
  }

</style>

<div class="container mx-auto p-8 pt-10 bg-white bg-opacity-70 shadow-lg rounded-lg">
  <h2 class="text-4xl mb-4 font-bold text-center">TIMELINE</h2>
  <!-- timeline -->
  <div class="bg-transparent mx-auto w-full h-full">
    <!-- line -->
    <div class="relative wrap overflow-hidden p-10 h-full">
      <div class="w-1 bg-gradient-to-b  from-transparent via-[#b005b5] to-transparent absolute h-full" style="left: 50%"></div>

      <!-- right timeline -->
      <div class="mb-8 flex justify-between items-center w-full right-timeline">
        <!-- circle -->
        <div class="order-1 w-5/12"></div>
        <div class="z-20 relative items-center justify-center order-1 bg-gradient-to-b from-[#b005b5] to-[#181be1] shadow-xl w-5 h-5 rounded-full ml-1"></div>
        <!-- box -->
        <div class="relative order-1 bg-opacity-70 bg-gradient-to-b from-[#b005b5] to-[#181be1] rounded-lg shadow-xl w-5/12 px-6 py-4">
          <div class="triangle-left"></div>
          <h3 class="mb-3 font-bold text-white text-xl">19 Aug - 15 Oct 2024</h3>
          <p class="text-lg leading-snug tracking-wide text-white text-opacity-100">Open Registration</p>
        </div>
      </div>

      <!-- left timeline -->
      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
        <div class="order-1 w-5/12"></div>
        <div class="z-20 relative items-center justify-center order-1 bg-gradient-to-b from-[#b005b5] to-[#181be1] shadow-xl w-5 h-5 rounded-full ml-1"></div>
        <div class="relative order-1 bg-opacity-70 bg-gradient-to-b from-[#b005b5] to-[#181be1] rounded-lg shadow-xl w-5/12 px-6 py-4">
          <div class="triangle-right"></div>
          <h3 class="mb-3 font-bold text-white text-xl">19 Oct 2024</h3>
          <p class="text-lg font-medium leading-snug tracking-wide text-white text-opacity-100">Technical Meeting</p>
        </div>
      </div>

      <div class="mb-8 flex justify-between items-center w-full right-timeline">
        <!-- circle -->
        <div class="order-1 w-5/12"></div>
        <div class="z-20 relative items-center justify-center order-1 bg-gradient-to-b from-[#b005b5] to-[#181be1] shadow-xl w-5 h-5 rounded-full ml-1"></div>
        <div class="relative order-1 bg-opacity-70 bg-gradient-to-b from-[#b005b5] to-[#181be1] rounded-lg shadow-xl w-5/12 px-6 py-4">
          <div class="triangle-left"></div>
          <h3 class="mb-3 font-bold text-white text-xl">21-23 Oct 2024</h3>
          <p class="text-lg leading-snug tracking-wide text-white text-opacity-100">Pre-eliminary</p>
        </div>
      </div>

      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
        <div class="order-1 w-5/12"></div>
        <div class="z-20 relative items-center justify-center order-1 bg-gradient-to-b from-[#b005b5] to-[#181be1] shadow-xl w-5 h-5 rounded-full ml-1"></div>
        <div class="relative order-1 bg-opacity-70 bg-gradient-to-b from-[#b005b5] to-[#181be1] rounded-lg shadow-xl w-5/12 px-6 py-4">
          <div class="triangle-right"></div>
          <h3 class="mb-3 font-bold text-white text-xl">2 Nov 2024</h3>
          <p class="text-lg font-medium leading-snug tracking-wide text-white text-opacity-100">Semifinal & Final</p>
        </div>
      </div>
    </div>
  </div>
</div>
