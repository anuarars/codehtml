<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>IT курс для начинающих</title>
        <!-- Favicon -->
        <link rel="icon" type="icon" href="assets/images/favicon.png" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800&display=swap" rel="stylesheet" />
        <!-- AOS Animation CSS -->
        <link href="assets/css/aos.css" rel="stylesheet" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body class="overflow-x-hidden">
        <!-- screen loader -->
        <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="200px"
                height="200px"
                viewBox="0 0 100 100"
                preserveAspectRatio="xMidYMid"
            >
                <circle cx="50" cy="50" r="0" fill="none" stroke="#47bdff" stroke-width="4">
                    <animate
                        attributeName="r"
                        repeatCount="indefinite"
                        dur="1s"
                        values="0;16"
                        keyTimes="0;1"
                        keySplines="0 0.2 0.8 1"
                        calcMode="spline"
                        begin="0s"
                    ></animate>
                    <animate
                        attributeName="opacity"
                        repeatCount="indefinite"
                        dur="1s"
                        values="1;0"
                        keyTimes="0;1"
                        keySplines="0.2 0 0.8 1"
                        calcMode="spline"
                        begin="0s"
                    ></animate>
                </circle>
                <circle cx="50" cy="50" r="0" fill="none" stroke="#b476e5" stroke-width="4">
                    <animate
                        attributeName="r"
                        repeatCount="indefinite"
                        dur="1s"
                        values="0;16"
                        keyTimes="0;1"
                        keySplines="0 0.2 0.8 1"
                        calcMode="spline"
                        begin="-0.5s"
                    ></animate>
                    <animate
                        attributeName="opacity"
                        repeatCount="indefinite"
                        dur="1s"
                        values="1;0"
                        keyTimes="0;1"
                        keySplines="0.2 0 0.8 1"
                        calcMode="spline"
                        begin="-0.5s"
                    ></animate>
                </circle>
            </svg>
        </div>

        <div class="bg-white font-mulish text-base text-gray antialiased dark:bg-[#101926]">
            <header id="top-header" class="sticky top-0 z-50 bg-black/10 transition duration-300">
                <div class="container">
                    <div class="top-nav">
                        <div class="flex items-center justify-between py-5 lg:py-0">
                            <a href="/"><img src="assets/images/logo.png" alt="logo" class="h-10" /></a>
                            <div class="flex items-center">
                                <ul class="flex items-center gap-5 ltr:pr-5 rtl:pl-5 ltr:lg:pl-5 ltr:lg:pr-0 rtl:lg:pr-5 rtl:lg:pl-0">
                                    <li>
                                        <button
                                            type="button"
                                            class="flex h-5 w-5 items-center text-white hover:text-primary rtl:text-primary"
                                            onclick="toggleDirection()"
                                        >
                                            <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 18.9439H7.72074"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M13.8571 21L16 18.9439L13.8571 16.8879"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M1 16.4206H9.27926"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M3.14287 18.4766L1 16.4206L3.14287 14.3645"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M12.7855 1H5.82118C4.82662 1 3.87279 1.37909 3.16952 2.05387C2.46626 2.72865 2.07117 3.64385 2.07117 4.59813C2.07117 5.55242 2.46626 6.46761 3.16952 7.14239C3.87279 7.81717 4.82662 8.19626 5.82118 8.19626H6.3569"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M10.6426 12.3084V1"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M6.3573 12.3084V1"
                                                    stroke="currentColor"
                                                    stroke-width="1.4"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            type="button"
                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-dark text-white hover:text-primary"
                                            onclick="toggleTheme()"
                                        >
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark-mode-btn">
                                                <path
                                                    d="M8 4C8 8.4 11.6 12 16 12C17.4 12 18.8 11.6 20 11C19.5 16.1 15.2 20 10 20C4.5 20 0 15.5 0 10C0 4.8 4 0.5 9 0C8.4 1.2 8 2.6 8 4ZM2 10C2 14.4 5.6 18 10 18C12.9 18 15.5 16.5 17 14C16.7 14 16.4 14 16 14C10.5 14 6 9.5 6 4C6 3.7 6 3.4 6 3C3.6 4.4 2 7.1 2 10Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                            <svg
                                                width="20"
                                                height="20"
                                                viewBox="0 0 20 20"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="light-mode-btn hidden"
                                            >
                                                <path
                                                    d="M10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5C11.3261 5 12.5979 5.52678 13.5355 6.46447C14.4732 7.40215 15 8.67392 15 10C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15ZM10 13.3333C10.8841 13.3333 11.7319 12.9821 12.357 12.357C12.9821 11.7319 13.3333 10.8841 13.3333 10C13.3333 9.11595 12.9821 8.2681 12.357 7.64298C11.7319 7.01786 10.8841 6.66667 10 6.66667C9.11595 6.66667 8.2681 7.01786 7.64298 7.64298C7.01786 8.2681 6.66667 9.11595 6.66667 10C6.66667 10.8841 7.01786 11.7319 7.64298 12.357C8.2681 12.9821 9.11595 13.3333 10 13.3333Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M9.09091 0.909092C9.09091 0.407014 9.49792 0 10 0C10.5021 0 10.9091 0.407014 10.9091 0.909092V1.81818C10.9091 2.32026 10.5021 2.72727 10 2.72727C9.49792 2.72727 9.09091 2.32026 9.09091 1.81818V0.909092ZM9.09091 18.1818C9.09091 17.6797 9.49792 17.2727 10 17.2727C10.5021 17.2727 10.9091 17.6797 10.9091 18.1818V19.0909C10.9091 19.593 10.5021 20 10 20C9.49792 20 9.09091 19.593 9.09091 19.0909V18.1818ZM2.92909 4.21455C2.57412 3.85958 2.57412 3.28406 2.92909 2.92909C3.28406 2.57412 3.85958 2.57412 4.21455 2.92909L4.85727 3.57182C5.21224 3.92679 5.21224 4.5023 4.85727 4.85727C4.5023 5.21224 3.92679 5.21224 3.57182 4.85727L2.92909 4.21455ZM15.1427 16.4282C14.7878 16.0732 14.7878 15.4977 15.1427 15.1427C15.4977 14.7878 16.0732 14.7878 16.4282 15.1427L17.0709 15.7855C17.4259 16.1404 17.4259 16.7159 17.0709 17.0709C16.7159 17.4259 16.1404 17.4259 15.7855 17.0709L15.1427 16.4282ZM15.7851 2.92886C16.1402 2.57358 16.7161 2.57361 17.0712 2.92894C17.4261 3.28403 17.4259 3.85951 17.071 4.21447L16.4283 4.8572C16.0732 5.21221 15.4977 5.21221 15.1427 4.8572C14.7877 4.50225 14.7876 3.92678 15.1425 3.57174L15.7851 2.92886ZM3.57182 15.1427C3.92679 14.7878 4.5023 14.7878 4.85727 15.1427C5.21224 15.4977 5.21224 16.0732 4.85727 16.4282L4.21455 17.0709C3.85958 17.4259 3.28406 17.4259 2.92909 17.0709C2.57412 16.7159 2.57412 16.1404 2.92909 15.7855L3.57182 15.1427ZM19.0909 9.09091C19.593 9.09091 20 9.49792 20 10C20 10.5021 19.593 10.9091 19.0909 10.9091H18.1818C17.6797 10.9091 17.2727 10.5021 17.2727 10C17.2727 9.49792 17.6797 9.09091 18.1818 9.09091H19.0909ZM1.81818 9.09091C2.32026 9.09091 2.72727 9.49792 2.72727 10C2.72727 10.5021 2.32026 10.9091 1.81818 10.9091H0.909092C0.407014 10.9091 0 10.5021 0 10C0 9.49792 0.407014 9.09091 0.909092 9.09091H1.81818Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                                <button type="button" class="flex h-10 w-10 items-center justify-center rounded-full bg-primary lg:hidden" onclick="toggleMenu()">
                                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                                        <path
                                            d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="-mt-[82px] overflow-x-hidden bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] dark:bg-none lg:-mt-[106px]">
                <div class="overflow-hidden bg-black pt-[82px] sm:-mx-[250px] sm:rounded-b-[50%] lg:-mx-[150px] lg:pt-[106px]">
                    <div class="relative">
                        <img src="assets/images/banner-lefticon.png" alt="banner-lefticon" class="absolute left-0 top-20 sm:left-[250px] lg:left-[150px]" />
                        <img
                            src="assets/images/banner-rightIcon.png"
                            alt="banner-rightIcon"
                            class="absolute right-0 -top-4 sm:right-[250px] lg:right-[150px]"
                        />
                        <div class="container">
                            <div class="relative bg-[url(../images/world-map.png)] bg-cover bg-top bg-no-repeat pt-14 pb-0 lg:pt-20 lg:pb-60 xl:pt-36">
                                <div class="relative z-[1] text-center text-white lg:w-3/5 ltr:lg:text-left rtl:lg:text-right xl:w-1/2">
                                    <h2 class="text-4xl font-extrabold leading-normal sm:text-5xl lg:text-[70px] lg:leading-[90px]">
                                        Курс <span class="italic text-primary">WEB</span> <span class="italic text-secondary">разработчик</span>
                                    </h2>
                                    <p class="my-8 text-lg lg:w-[90%]">
                                    <a href="#call" class="btn mx-auto mt-2 block w-fit bg-white lg:mx-0 lg:rtl:ml-auto">Оставить заявку</a>
                                </div>
                                <div
                                    class="bottom-0 mx-auto w-auto ltr:right-0 rtl:left-0 md:w-[540px] lg:absolute xl:w-[650px]"
                                    data-aos="fade-left"
                                    data-aos-duration="1000"
                                >
                                    <img src="assets/images/home-banner-icon.svg" alt="home-banner-icon" class="rtl:rotate-y-180" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="bg-[url(../images/service-bg.png)] bg-cover bg-center bg-no-repeat py-14 dark:bg-none lg:py-[100px]">
                    <div class="container">
                        <div class="heading text-center">
                            <h4>Чему вы начитесь</h4>
                        </div>
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary"
                                    style="box-shadow: -20px 30px 70px rgba(219, 222, 225, 0.4)"
                                >
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary transition group-hover:bg-black"
                                        style="box-shadow: 0px 15px 30px rgba(180, 118, 229, 0.4)"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                opacity="0.5"
                                                d="M14.2371 18.7087L18.7103 14.2366L21.4893 17.0156V21.4888H17.0172L14.2371 18.7087ZM5.2917 9.76334L2.3092 6.7819C2.21118 6.68399 2.13342 6.56771 2.08036 6.43973C2.02731 6.31174 2 6.17455 2 6.03601C2 5.89746 2.02731 5.76027 2.08036 5.63229C2.13342 5.5043 2.21118 5.38803 2.3092 5.29012L5.2917 2.30867C5.4894 2.11103 5.75751 2 6.03706 2C6.31662 2 6.58472 2.11103 6.78242 2.30867L9.76598 5.29012L5.2917 9.76334Z"
                                                fill="white"
                                            />
                                            <path
                                                d="M5.29177 12.7459L7.21895 14.6742L8.71179 13.1813L6.78249 11.2552L8.27321 9.76449L10.2015 11.6917L11.6922 10.201L9.76605 8.27271L11.2568 6.78199L13.1818 8.71128L14.6736 7.2195L12.7454 5.29232L15.7279 2.31087C15.9256 2.11323 16.1937 2.0022 16.4732 2.0022C16.7528 2.0022 17.0209 2.11323 17.2186 2.31087L21.6908 6.78304C21.8884 6.98074 21.9994 7.24885 21.9994 7.5284C21.9994 7.80795 21.8884 8.07606 21.6908 8.27376L8.27321 21.6913C8.07551 21.889 7.8074 22 7.52785 22C7.2483 22 6.98019 21.889 6.78249 21.6913L2.31032 17.2192C2.11268 17.0215 2.00165 16.7533 2.00165 16.4738C2.00165 16.1942 2.11268 15.9261 2.31032 15.7284L5.29177 12.7459Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </div>
                                    <a
                                        href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black"
                                        >Фронтенд</a
                                    >
                                    <p class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        HTML и CSS верстка, Javascript основы
                                    </p>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary"
                                    style="box-shadow: -20px 30px 70px rgba(219, 222, 225, 0.4)"
                                >
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary transition group-hover:bg-black"
                                        style="box-shadow: 0px 15px 30px rgba(180, 118, 229, 0.4)"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                opacity="0.5"
                                                d="M10.1658 20C10.5862 20 10.9617 19.7371 11.1054 19.342L15.8374 6.34204C16.0749 5.68981 15.5919 5 14.8978 5H13.8341C13.4137 5 13.0382 5.26292 12.8945 5.65796L8.16245 18.658C7.92504 19.3102 8.40804 20 9.10214 20H10.1658Z"
                                                fill="white"
                                            />
                                            <path
                                                d="M17.9889 17.0964C18.3794 17.4871 19.0127 17.4873 19.4034 17.0966L23.2929 13.2071C23.6834 12.8166 23.6834 12.1834 23.2929 11.7929L19.4036 7.90359C19.0129 7.51287 18.3793 7.5131 17.9889 7.90409L17.2814 8.61254C16.8913 9.00328 16.8916 9.63632 17.2823 10.0266L19.0501 11.7927C19.441 12.1832 19.441 12.8168 19.0502 13.2074L17.2822 14.9746C16.8916 15.365 16.8914 15.9981 17.2818 16.3888L17.9889 17.0964ZM4.94994 13.2073C4.55904 12.8167 4.55896 12.1832 4.94977 11.7925L6.71781 10.0253C7.10839 9.63494 7.10858 9.00184 6.71823 8.61121L6.01111 7.90359C5.62062 7.51283 4.98726 7.51272 4.59664 7.90334L0.707106 11.7929C0.316582 12.1834 0.316582 12.8166 0.707107 13.2071L4.59639 17.0964C4.98711 17.4871 5.62066 17.4869 6.01111 17.0959L6.71856 16.3874C7.10874 15.9967 7.10837 15.3637 6.71773 14.9734L4.94994 13.2073Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </div>
                                    <a
                                        href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black"
                                        >Бэкенд</a
                                    >
                                    <p class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        PHP основы, работа с БД MySQL, ООП
                                    </p>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="group rounded-3xl border-2 border-white bg-white p-6 transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary"
                                    style="box-shadow: -20px 30px 70px rgba(219, 222, 225, 0.4)"
                                >
                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary transition group-hover:bg-black"
                                        style="box-shadow: 0px 15px 30px rgba(180, 118, 229, 0.4)"
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                opacity="0.5"
                                                d="M6.21053 20H3.05263C2.77346 20 2.50572 19.8891 2.30831 19.6917C2.1109 19.4943 2 19.2265 2 18.9474V10.5263C2 10.2471 2.1109 9.97941 2.30831 9.782C2.50572 9.58459 2.77346 9.47369 3.05263 9.47369H6.21053C6.4897 9.47369 6.75744 9.58459 6.95485 9.782C7.15226 9.97941 7.26316 10.2471 7.26316 10.5263V18.9474C7.26316 19.2265 7.15226 19.4943 6.95485 19.6917C6.75744 19.8891 6.4897 20 6.21053 20ZM20.9474 20H17.7895C17.5103 20 17.2426 19.8891 17.0452 19.6917C16.8477 19.4943 16.7368 19.2265 16.7368 18.9474V7.36843C16.7368 7.08925 16.8477 6.82151 17.0452 6.6241C17.2426 6.4267 17.5103 6.3158 17.7895 6.3158H20.9474C21.2265 6.3158 21.4943 6.4267 21.6917 6.6241C21.8891 6.82151 22 7.08925 22 7.36843V18.9474C22 19.2265 21.8891 19.4943 21.6917 19.6917C21.4943 19.8891 21.2265 20 20.9474 20Z"
                                                fill="white"
                                            />
                                            <path
                                                d="M13.5789 20H10.421C10.1419 20 9.87412 19.8891 9.67672 19.6917C9.47931 19.4943 9.36841 19.2265 9.36841 18.9474V1.05263C9.36841 0.773456 9.47931 0.505715 9.67672 0.308309C9.87412 0.110902 10.1419 0 10.421 0H13.5789C13.8581 0 14.1259 0.110902 14.3233 0.308309C14.5207 0.505715 14.6316 0.773456 14.6316 1.05263V18.9474C14.6316 19.2265 14.5207 19.4943 14.3233 19.6917C14.1259 19.8891 13.8581 20 13.5789 20Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </div>
                                    <a
                                        href="services-detail.html"
                                        class="my-8 inline-block text-[22px] font-extrabold text-black dark:text-white dark:group-hover:text-black"
                                        >Практика</a
                                    >
                                    <p class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                        Создание своего WEB приложения, Деплой
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-14 dark:bg-gray-dark lg:py-[100px]" id="call">
                    <div class="container">
                        <div class="relative z-10 lg:flex">
                            <div class="heading text-center lg:mb-0 lg:w-1/3 ltr:lg:pr-10 ltr:lg:text-left rtl:lg:pl-10 rtl:lg:text-right">
                                <h4 class="sm:!leading-[50px]">Готовы начать ?</h4>
                                <img src="assets/images/form-img.png" alt="form-img" class="mx-auto" data-aos="fade-right" data-aos-duration="1000" />
                            </div>
                            <form action="telegram.php" method="post" class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:w-2/3 lg:px-8">
                                <div class="grid gap-10">
                                    <div class="relative">
                                        <input
                                            type="text"
                                            name="name"
                                            class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                            placeholder="Имя"
                                        />
                                        <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white"
                                            >Имя</label
                                        >
                                        <svg
                                            width="20"
                                            height="22"
                                            viewBox="0 0 20 22"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                        >
                                            <path
                                                d="M5.42855 5.57875C5.42855 8.10348 7.47525 10.1502 9.99998 10.1502C12.5247 10.1502 14.5714 8.10348 14.5714 5.57875C14.5714 3.05402 12.5247 1.00732 9.99998 1.00732"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />
                                            <path
                                                d="M2 16.9328C2 15.9495 2.61812 15.0724 3.5441 14.7417V14.7417C7.71891 13.2507 12.2811 13.2507 16.4559 14.7417V14.7417C17.3819 15.0724 18 15.9495 18 16.9328V18.7014C18 19.9185 16.922 20.8535 15.7172 20.6813L13.8184 20.4101C11.2856 20.0483 8.71435 20.0483 6.18162 20.4101L4.28284 20.6813C3.07798 20.8535 2 19.9185 2 18.7014V16.9328Z"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                            />
                                        </svg>
                                    </div>
                                    <div class="relative">
                                        <input
                                            type="text"
                                            name="mobile"
                                            class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                            placeholder="+7 (777) XXX XX XX"
                                        />
                                        <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white"
                                            >Телефон</label
                                        >
                                        <svg
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                        >
                                            <path
                                                d="M6.45241 1.40806C5.45292 0.783702 4.14202 0.887138 3.2983 1.73086L1.86856 3.1606C-0.302899 5.33207 1.73747 10.8931 6.42586 15.5815C11.1142 20.2699 16.6753 22.3102 18.8467 20.1388L20.2765 18.709C21.2635 17.722 21.2374 16.0956 20.2182 15.0764L18.0036 12.8619C16.9844 11.8426 15.358 11.8165 14.371 12.8036L14.0639 13.1107C13.531 13.6436 12.6713 13.6957 12.0713 13.2005C11.4925 12.7229 10.9159 12.208 10.3576 11.6497C9.79933 11.0914 9.28441 10.5149 8.80678 9.93607C8.31161 9.33601 8.36374 8.47631 8.89666 7.9434L9.20375 7.63631C9.98187 6.85819 10.1303 5.68271 9.65898 4.72062"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-10 text-center ltr:lg:text-right rtl:lg:text-left">
                                    <button type="submit" class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                        Оставить заявку
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Return to Top -->
        <button type="button" id="scrollToTopBtn" class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5" onclick="scrollToTop()">
            <div
                class="group flex h-14 w-14 items-center justify-center rounded-full border border-black/20 bg-black text-white transition duration-500 hover:bg-secondary dark:bg-primary dark:hover:bg-secondary"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6 transition group-hover:text-black"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </div>
        </button>

        <!-- AOS Animation JS -->
        <script src="assets/js/aos.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>
