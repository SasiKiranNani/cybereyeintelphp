<?php
include('includes/header.php');
?>
<main>
   <!-- breadcrumb-area-start -->
   <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="assets/images/breadcrumb-bg.webp">
      <div class="container">
         <div class="row ">
            <div class="col-md-12">
               <div class="it-breadcrumb-content z-index-3 text-center">
                  <div class="it-breadcrumb-title-box">
                     <h3 class="it-breadcrumb-title">Microsoft says April Windows updates break VPN connections</h3>
                  </div>
                  <div class="it-breadcrumb-list-wrap">
                     <div class="it-breadcrumb-list">
                        <span><a href="index.php">home</a></span>
                        <span class="dvdr">//</span>
                        <span>Blogs</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb-area-end -->
   <div class="postbox__area pt-50 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="postbox__details-wrapper">
                  <article>
                     <div class="postbox__thumb mb-30 w-img">
                        <img src="assets/images/blogs/microsoft-says-april-windows-updates-break-vpn-connections.jpg" alt="">
                     </div>
                     <div class="postbox__details-title-box pb-40">
                        <div class="postbox__meta">
                           <span><i class="fa-solid fa-calendar-days"></i>1 May 2024</span>
                           <span><i class="fa-regular fa-user"></i><a href="#">Sergiu Gatlan</a></span>
                        </div>
                        <h4 class="postbox__title mb-20">Microsoft says April Windows updates break VPN connections</h4>
                        <p>Microsoft has confirmed that the April 2024 Windows security updates break VPN connections across client and server platforms.</p>
                        <p>The company explains on the Windows health dashboard that "Windows devices might face VPN connection failures after installing the April 2024 security update or the April 2024 non-security preview update."</p>
                        <p>"We are investigating user reports, and we will provide more information in the coming days," Redmond added. US govt warns of pro-Russian hacktivists targeting water facilities</p>
                        <p>The list of affected Windows versions includes Windows 11, Windows 10, and Windows Server 2008 and later.</p>
                        <p>The complete list of affected Windows versions and problematic security updates includes:</p>
                        <p>Client: Windows 11, version 22H2/23H2 (KB5036893), Windows 11 21H2 (KB5036894), and Windows 10 (KB5036892).</p>
                        <p>Server: Windows Server 2022 (KB5036909), Windows Server 2019 (KB5036896), Windows Server 2016 (KB5036899), Windows Server 2012 R2 (KB5036960), Windows Server 2012 (KB5036969), Windows Server 2008 R2 (KB5036967), Windows Server 2008 (KB5036932).</p>
                        <p>While Microsoft has yet to provide the root cause behind these VPN failures, it advised home users to use the Windows Get Help app if they need support with their personal or family accounts.</p>
                        <p>It also said that small business and large enterprise customers who require help should reach out via the dedicated "Support for Business" portal.</p>
                        <p>Temporary workaround for VPN issues</p>
                        <p>While there is no workaround for this issue on affected systems until Microsoft provides a fix, you can uninstall the security updates to temporarily address the VPN problems.</p>
                        <p>"To remove the LCU after installing the combined SSU and LCU package, use the DISM/Remove-Package command line option with the LCU package name as the argument. You can find the package name by using this command: DISM /online /get-packages," Microsoft says.</p>
                        <p>However, it's important to note that Redmond includes all security fixes in a single update. Hence, removing cumulative updates removes all fixes for patched security vulnerabilities in addition to resolving VPN issues.</p>
                        <p>One year ago, Microsoft investigated major L2TP/IPsec VPN speed issues over Wi-Fi connections on Windows 11 systems after installing the April 2023 non-security updates.</p>
                        <p>In mid-January 2022, the company also released emergency out-of-band updates to address L2TP VPN issues when connecting via the Windows VPN client after installing the January 2022 Patch Tuesday updates.</p>
                     </div>
                  </article>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="it-sv-details-sidebar blog-sidebar">
                  <div class="it-sv-details-sidebar-widget mb-45">
                     <h4 class="it-sv-details-sidebar-title mb-30">Category</h4>
                     <div class="it-sv-details-sidebar-category mb-10">
                        <a href="#">
                           Cyber Security
                           <span><i class="fa-light fa-angle-right"></i></span>
                        </a>
                     </div>
                     <div class="it-sv-details-sidebar-category mb-10">
                        <a href="#">
                           Hacking
                           <span><i class="fa-light fa-angle-right"></i></span>
                        </a>
                     </div>
                     <div class="it-sv-details-sidebar-category mb-10">
                        <a href="#">
                           Vulnerbility
                           <span><i class="fa-light fa-angle-right"></i></span>
                        </a>
                     </div>
                     <div class="it-sv-details-sidebar-category mb-10">
                        <a href="#">
                           Ransomeware
                           <span><i class="fa-light fa-angle-right"></i></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<?php
include('includes/footer.php');
?>