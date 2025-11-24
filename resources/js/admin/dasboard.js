  // Initialize Chart
  const ctx = document.getElementById('revenueChart').getContext('2d');
  const gradient = ctx.createLinearGradient(0, 0, 0, 400);
  gradient.addColorStop(0, 'rgba(192, 192, 192, 0.3)');
  gradient.addColorStop(1, 'rgba(192, 192, 192, 0.01)');

  const chart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'CN'],
          datasets: [{
              label: 'Doanh Thu (Triệu VNĐ)',
              data: [125, 189, 156, 234, 198, 267, 245],
              borderColor: '#c0c0c0',
              backgroundColor: gradient,
              borderWidth: 3,
              fill: true,
              tension: 0.4,
              pointBackgroundColor: '#c0c0c0',
              pointBorderColor: '#1a1a1a',
              pointBorderWidth: 3,
              pointRadius: 6,
              pointHoverRadius: 8,
              pointHoverBackgroundColor: '#ffffff',
              pointHoverBorderColor: '#c0c0c0',
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
              legend: {
                  display: false
              },
              tooltip: {
                  backgroundColor: 'rgba(28, 28, 28, 0.95)',
                  titleColor: '#ffffff',
                  bodyColor: '#c0c0c0',
                  borderColor: '#3a3a3a',
                  borderWidth: 1,
                  padding: 12,
                  displayColors: false,
                  callbacks: {
                      label: function(context) {
                          return context.parsed.y.toLocaleString('vi-VN') + ' triệu ₫';
                      }
                  }
              }
          },
          scales: {
              y: {
                  beginAtZero: true,
                  grid: {
                      color: '#2a2a2a',
                      drawBorder: false
                  },
                  ticks: {
                      color: '#9a9a9a',
                      callback: function(value) {
                          return value + 'M';
                      }
                  }
              },
              x: {
                  grid: {
                      display: false,
                      drawBorder: false
                  },
                  ticks: {
                      color: '#9a9a9a'
                  }
              }
          },
          interaction: {
              intersect: false,
              mode: 'index'
          }
      }
  });

  // Navigation active state
  document.querySelectorAll('.nav-item').forEach(item => {
      item.addEventListener('click', function() {
          document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove('active'));
          this.classList.add('active');
      });
  });

  // Filter buttons
  document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', function() {
          document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
          this.classList.add('active');

          // Update chart data based on filter
          const period = this.textContent.trim();
          let newData, newLabels;

          if (period === '7 Ngày') {
              newLabels = ['T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'CN'];
              newData = [125, 189, 156, 234, 198, 267, 245];
          } else if (period === '30 Ngày') {
              newLabels = Array.from({ length: 30 }, (_, i) => (i + 1).toString());
              newData = Array.from({ length: 30 }, () => Math.floor(Math.random() * 150) + 100);
          } else if (period === '90 Ngày') {
              newLabels = Array.from({ length: 12 }, (_, i) => 'T' + (i + 1));
              newData = Array.from({ length: 12 }, () => Math.floor(Math.random() * 200) + 150);
          } else {
              newLabels = ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'];
              newData = [1450, 1680, 1520, 1890, 2100, 2350, 2180, 2420, 2280, 2650, 2480, 2850];
          }

          chart.data.labels = newLabels;
          chart.data.datasets[0].data = newData;
          chart.update();
      });
  });

  // Mobile menu toggle
  const menuBtn = document.createElement('div');
  menuBtn.className = 'icon-btn';
  menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
  menuBtn.style.position = 'fixed';
  menuBtn.style.top = '1rem';
  menuBtn.style.left = '1rem';
  menuBtn.style.zIndex = '1000';
  menuBtn.style.display = 'none';

  if (window.innerWidth <= 768) {
      document.body.appendChild(menuBtn);
      menuBtn.style.display = 'flex';
  }

  menuBtn.addEventListener('click', () => {
      document.getElementById('sidebar').classList.toggle('active');
  });

  window.addEventListener('resize', () => {
      if (window.innerWidth <= 768) {
          menuBtn.style.display = 'flex';
      } else {
          menuBtn.style.display = 'none';
          document.getElementById('sidebar').classList.remove('active');
      }
  });

  // Animate stats on load
  document.querySelectorAll('.stat-value').forEach(stat => {
      const finalValue = stat.textContent;
      stat.textContent = '0';

      setTimeout(() => {
          stat.textContent = finalValue;
      }, 300);
  });

  function toggleSubMenu(navItem) {
      // Lấy phần tử menu con ngay sau mục vừa nhấp
      const subMenu = navItem.nextElementSibling;
      // Lấy mũi tên bên trong mục vừa nhấp
      const arrow = navItem.querySelector('.nav-arrow');

      // Kiểm tra xem có phải là menu con hợp lệ không
      if (subMenu && subMenu.classList.contains('sub-nav-container')) {
          // Nếu đang ẩn thì hiện ra
          if (subMenu.style.display === "none" || subMenu.style.display === "") {
              subMenu.style.display = "block";
              navItem.classList.add('active'); // Thêm class 'active' để làm nổi bật
              if (arrow) {
                  arrow.style.transform = "rotate(180deg)"; // Xoay mũi tên
              }
          } else {
              // Nếu đang hiện thì ẩn đi
              subMenu.style.display = "none";
              navItem.classList.remove('active'); // Bỏ class 'active'
              if (arrow) {
                  arrow.style.transform = "rotate(0deg)"; // Quay lại mũi tên
              }
          }
      }
  }


  // Giữ lại hàm gốc cho banner
  function toggleBanner() {
      var bannerContent = document.getElementById('banner-content');
      if (bannerContent.style.display === 'none') {
          bannerContent.style.display = 'block';
      } else {
          bannerContent.style.display = 'none';
      }
  }