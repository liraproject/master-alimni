export default {
    isDarkModeEnabled: false,
    isMonochromeModeEnabled: false,
    isSearchbarActive: false,
    isSidebarExpanded: false,
    isSidebarPanelExpanded: false,
    isRightSidebarExpanded: false,

    init() {
    //   this.isDarkModeEnabled = Alpine.$persist(true).as("_x_darkMode_on");

      this.isSidebarExpanded =
        document.querySelector(".sidebar") &&
        document.body.classList.contains("is-sidebar-open") &&
        Alpine.store("breakpoints").xlAndUp;

      this.isSidebarPanelExpanded =
        document.querySelector(".sidebar") &&
        document.body.classList.contains("is-sidebar-panel-open") &&
        Alpine.store("breakpoints").xlAndUp;

      Alpine.effect(() => {
        this.isDarkModeEnabled
          ? document.documentElement.classList.add("dark")
          : document.documentElement.classList.remove("dark");
      });

      Alpine.effect(() => {
        this.isMonochromeModeEnabled
          ? document.body.classList.add("is-monochrome")
          : document.body.classList.remove("is-monochrome");
      });

      Alpine.effect(() => {
        this.isSidebarExpanded
          ? document.body.classList.add("is-sidebar-open")
          : document.body.classList.remove("is-sidebar-open");
      });

      Alpine.effect(() => {
        this.isSidebarPanelExpanded
          ? document.body.classList.add("is-sidebar-panel-open")
          : document.body.classList.remove("is-sidebar-panel-open");
      });

      Alpine.effect(() => {
        if (Alpine.store("breakpoints").smAndUp) this.isSearchbarActive = false;
      });

      window.addEventListener('changed:breakpoint', () => {
        if (this.isSidebarExpanded) this.isSidebarExpanded = false;
        if (this.isSidebarPanelExpanded) this.isSidebarPanelExpanded = false;
        if (this.isRightSidebarExpanded) this.isRightSidebarExpanded = false;
      })
    },

    documentBody: {
      ["@load.window"]() {
        const preloader = document.querySelector(".app-preloader");
        if (!preloader) return;
        setTimeout(() => {
          preloader.classList.add(
            "animate-[cubic-bezier(0.4,0,0.2,1)_fade-out_500ms_forwards]"
          );
          setTimeout(() => preloader.classList.add('hidden'), 1000);
        }, 150);
      },
    },
  };
