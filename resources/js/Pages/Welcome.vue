<template>
  <Head title="Welcome" />

  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">Dashboard</Link>
      <template v-else>
        <Link :href="route('login')" class="text-sm text-gray-700 underline">Log in</Link>

        <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">Register</Link>
      </template>
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <svg width="308px" height="55px" viewBox="0 0 308 55" version="1.1" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(-341.000000, -491.000000)" fill="#6DD400" fill-rule="nonzero">
              <path
                d="M374.222168,535.662598 L374.222168,530.033203 L348.074707,520.281738 L374.222168,510.437988 L374.222168,504.839355 L341.707031,517.697754 L341.707031,522.804199 L374.222168,535.662598 Z M388.956152,540.89209 C391.581152,540.89209 393.811377,540.405029 395.646826,539.430908 C397.482275,538.456787 399.00498,536.944336 400.214941,534.893555 L400.214941,534.893555 L400.214941,540 L405.905859,540 L405.905859,520.343262 C405.905859,517.328613 405.741797,515.067627 405.413672,513.560303 C405.085547,512.052979 404.531836,510.786621 403.752539,509.76123 C402.501562,508.07959 400.866064,506.818359 398.846045,505.977539 C396.826025,505.136719 394.390723,504.716309 391.540137,504.716309 C389.735449,504.716309 387.874365,504.91626 385.956885,505.316162 C384.039404,505.716064 382.034766,506.315918 379.942969,507.115723 L379.942969,507.115723 L379.942969,512.775879 C381.80918,511.709473 383.72666,510.899414 385.69541,510.345703 C387.66416,509.791992 389.612402,509.515137 391.540137,509.515137 C394.554785,509.515137 396.749121,510.135498 398.123145,511.376221 C399.497168,512.616943 400.194434,514.611328 400.214941,517.359375 L400.214941,517.359375 L400.214941,518.251465 L392.616797,518.251465 C387.633398,518.251465 383.854834,519.246094 381.281104,521.235352 C378.707373,523.224609 377.420508,526.136719 377.420508,529.97168 C377.420508,533.293945 378.466406,535.94458 380.558203,537.923584 C382.65,539.902588 385.449316,540.89209 388.956152,540.89209 Z M390.155859,536.154785 C387.941016,536.154785 386.208105,535.580566 384.957129,534.432129 C383.706152,533.283691 383.080664,531.673828 383.080664,529.602539 C383.080664,527.305664 383.916357,525.577881 385.587744,524.419189 C387.259131,523.260498 389.745703,522.681152 393.047461,522.681152 L393.047461,522.681152 L400.214941,522.681152 L400.214941,523.942383 C400.194434,527.756836 399.29209,530.74585 397.50791,532.909424 C395.72373,535.072998 393.273047,536.154785 390.155859,536.154785 Z M441.926953,540 L441.926953,535.231934 L435.313184,535.231934 C433.487988,535.231934 432.108838,534.585938 431.175732,533.293945 C430.242627,532.001953 429.776074,530.084473 429.776074,527.541504 L429.776074,527.541504 L429.776074,491.950195 L415.041211,491.950195 L415.041211,496.379883 L424.115918,496.379883 L424.115918,527.541504 C424.115918,531.52002 425.043896,534.591064 426.899854,536.754639 C428.755811,538.918213 431.375684,540 434.759473,540 L434.759473,540 L441.926953,540 Z M462.78252,540.89209 C466.945605,540.89209 470.221729,539.2771 472.610889,536.047119 C475.000049,532.817139 476.194629,528.361816 476.194629,522.681152 C476.194629,517.08252 475.005176,512.688721 472.62627,509.499756 C470.247363,506.310791 466.986621,504.716309 462.844043,504.716309 C460.752246,504.716309 458.91167,505.16748 457.322314,506.069824 C455.732959,506.972168 454.487109,508.26416 453.584766,509.945801 L453.584766,509.945801 L453.584766,492.134766 L447.924609,492.134766 L447.924609,540 L453.584766,540 L453.584766,535.662598 C454.528125,537.364746 455.784229,538.661865 457.353076,539.553955 C458.921924,540.446045 460.731738,540.89209 462.78252,540.89209 Z M461.951953,536.093262 C459.203906,536.093262 457.122363,534.965332 455.707324,532.709473 C454.292285,530.453613 453.584766,527.151855 453.584766,522.804199 C453.584766,518.436035 454.292285,515.12915 455.707324,512.883545 C457.122363,510.637939 459.203906,509.515137 461.951953,509.515137 C464.679492,509.515137 466.740527,510.632812 468.135059,512.868164 C469.52959,515.103516 470.226855,518.415527 470.226855,522.804199 C470.226855,527.192871 469.52959,530.504883 468.135059,532.740234 C466.740527,534.975586 464.679492,536.093262 461.951953,536.093262 Z M493.512598,540.89209 C495.563379,540.89209 497.373193,540.446045 498.942041,539.553955 C500.510889,538.661865 501.766992,537.364746 502.710352,535.662598 L502.710352,535.662598 L502.710352,540 L508.370508,540 L508.370508,492.134766 L502.710352,492.134766 L502.710352,509.945801 C501.808008,508.243652 500.567285,506.946533 498.988184,506.054443 C497.409082,505.162354 495.583887,504.716309 493.512598,504.716309 C489.37002,504.716309 486.099023,506.310791 483.699609,509.499756 C481.300195,512.688721 480.100488,517.08252 480.100488,522.681152 C480.100488,528.361816 481.295068,532.817139 483.684229,536.047119 C486.073389,539.2771 489.349512,540.89209 493.512598,540.89209 Z M494.343164,536.093262 C491.615625,536.093262 489.55459,534.975586 488.160059,532.740234 C486.765527,530.504883 486.068262,527.192871 486.068262,522.804199 C486.068262,518.415527 486.765527,515.103516 488.160059,512.868164 C489.55459,510.632812 491.615625,509.515137 494.343164,509.515137 C497.070703,509.515137 499.147119,510.637939 500.572412,512.883545 C501.997705,515.12915 502.710352,518.436035 502.710352,522.804199 C502.710352,527.151855 501.997705,530.453613 500.572412,532.709473 C499.147119,534.965332 497.070703,536.093262 494.343164,536.093262 Z M531.502441,540.89209 C533.368652,540.89209 535.301514,540.671631 537.301025,540.230713 C539.300537,539.789795 541.376953,539.128418 543.530273,538.246582 L543.530273,538.246582 L543.530273,532.617188 C541.294922,533.786133 539.192871,534.657715 537.224121,535.231934 C535.255371,535.806152 533.368652,536.093262 531.563965,536.093262 C527.995605,536.093262 525.232178,535.067871 523.273682,533.01709 C521.315186,530.966309 520.417969,527.592773 520.582031,522.896484 L520.582031,522.896484 L520.582031,522.711914 L545.099121,522.711914 L545.099121,519.943359 C544.935059,515.739258 543.58667,512.150391 541.053955,509.176758 C538.52124,506.203125 535.060547,504.716309 530.671875,504.716309 C525.75,504.716309 521.8125,506.356934 518.859375,509.638184 C515.90625,512.919434 514.429688,517.308105 514.429688,522.804199 C514.429688,528.443848 515.937012,532.868408 518.95166,536.077881 C521.966309,539.287354 526.149902,540.89209 531.502441,540.89209 Z M520.797363,518.312988 C520.961426,516.057129 521.925293,514.026855 523.688965,512.222168 C525.452637,510.41748 527.698242,509.515137 530.425781,509.515137 C533.214844,509.515137 535.352783,510.381592 536.8396,512.114502 C538.326416,513.847412 539.192871,515.90332 539.438965,518.282227 L539.438965,518.282227 L520.797363,518.312988 Z M567.585059,540 L579.828223,505.546875 L573.952734,505.546875 L563.924414,534.462891 L553.926855,505.546875 L548.051367,505.546875 L560.294531,540 L567.585059,540 Z M588.317578,545.844727 L612.496289,494.072754 L606.651562,494.072754 L582.44209,545.844727 L588.317578,545.844727 Z M616.340625,535.662598 L648.855762,522.804199 L648.855762,517.697754 L616.340625,504.839355 L616.340625,510.437988 L642.488086,520.281738 L616.340625,530.033203 L616.340625,535.662598 Z"
                id="&lt;albdev/&gt;"
              ></path>
            </g>
          </g>
        </svg>
      </div>

      <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6">
            <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
              <div class="ml-4 text-lg leading-7 font-semibold">
                <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a>
              </div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
              </div>
            </div>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <div class="ml-4 text-lg leading-7 font-semibold">
                <a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a>
              </div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.</div>
            </div>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
              </svg>
              <div class="ml-4 text-lg leading-7 font-semibold">
                <a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a>
              </div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.</div>
            </div>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Laravel's robust library of first-party tools and libraries, such as
                <a href="https://forge.laravel.com" class="underline">Forge</a>
                ,
                <a href="https://vapor.laravel.com" class="underline">Vapor</a>
                ,
                <a href="https://nova.laravel.com" class="underline">Nova</a>
                , and
                <a href="https://envoyer.io" class="underline">Envoyer</a>
                help you take your projects to the next level. Pair them with powerful open source libraries like
                <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>
                ,
                <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>
                ,
                <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>
                ,
                <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>
                ,
                <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>
                ,
                <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>
                , and more.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
          <div class="flex items-center">
            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
              <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>

            <a href="https://laravel.bigcartel.com" class="ml-1 underline">Shop</a>

            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
              <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>

            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">Sponsor</a>
          </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})</div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.bg-gray-100 {
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
  border-color: #edf2f7;
  border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
  color: #cbd5e0;
  color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
  color: #718096;
  color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
  color: #4a5568;
  color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
  color: #1a202c;
  color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-gray-800 {
    background-color: #2d3748;
    background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
  }

  .dark\:bg-gray-900 {
    background-color: #1a202c;
    background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
  }

  .dark\:border-gray-700 {
    border-color: #4a5568;
    border-color: rgba(74, 85, 104, var(--tw-border-opacity));
  }

  .dark\:text-white {
    color: #fff;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
  }
}
</style>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Head,
    Link,
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
});
</script>
