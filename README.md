# <p align="center">   QR코드 모바일 결제 시스템 </p>

##### 

<p align="center">소비자들의 주문정보를 처리하기 위한 관리자용 웹페이지입니다.</p>

담당 역할 : 팀장<br>
개발 인원 : 3명 <br>
개발 기간 : 6개월<br>
기여도 : 90%

**목차**

1. 앱의기능
2. 사용한 기술들
3. 서비스 구조
4. 시연영상 링크



#  1. 웹의 기능
![](https://raw.githubusercontent.com/YunSeokVV/Capstone_Design_Web/master/preview/preView1.png)

![](https://raw.githubusercontent.com/YunSeokVV/Capstone_Design_Web/master/preview/preView2.png)

![](https://raw.githubusercontent.com/YunSeokVV/Capstone_Design_Web/master/preview/preView3.png)

![](https://raw.githubusercontent.com/YunSeokVV/Capstone_Design_Web/master/preview/preView5.png)

![](https://raw.githubusercontent.com/YunSeokVV/Capstone_Design_Web/master/preview/preView4.png)



# 기능 상세설명

**관리자페이지 메인화면** 
- 관리자 페이지의 메인화면입니다. 소비자들의 주문정보를 확인할수도 있고 가게에서 판매하고 있는 상품들의 정보를 확인할 수 있습니다.

**소비자 주문정보 확인**
- 앱을 활용해서 상품을 주문한 고객들의 주문정보를 확인할 수 있습니다. 

**소비자 주문정보 옵션별 검색**
- 고객명, 주소, 연락처를 기준으로 검색해서 특정 주문정보를 검색할 수 있습니다.
  
**상품정보 확인**
- 가게에서 판매하는 상품의 정보를 확인할 수 있습니다.

**상품정보 옵션별 검색**
- 옵션에 따라서 상품의 정보를 검색할 수 있습니다. (상품번호, 상품명, 가격)

# 2. 사용한 기술 & 라이브러리

- Language : PHP
- HTML
- JavaScript

# 3. 서비스 구조

![](https://raw.githubusercontent.com/YunSeokVV/Capstone_Design_Web/master/preview/ServiceArchitecture.png)

**상품 QR코드** 
- 기존의 방식이던 상품 바코드에 비해 QR코드는 담을 수 있는 정보의 양이 앞도적으로 많습니다. 그리고 바코드와 다르게 상하좌우 관계없이 인식할 수 있습니다.

**소비자용 앱**
- 앱을 활용하면 사용자는 따로 장바구니가 쇼핑카트를 들고 다니면서 물건을 챙기지 않아도 됩니다. 앱으로 구매할 상품을 설정하면 됩니다.
  
**결제 API (BootPay API)**
- 소비자용앱에서 장바구니에 모아둔 상품들을 결제합니다.
  
**배송관리용 웹서버**
- 소비자의 주문정보와 구매내역등을 저장하고 있는 웹서버입니다.
  
**관리자용 웹**
- 소비자의 주문정보를 처리할 수 있는 관리자용 웹페이지입니다. 판매하고 있는 상품도 확인할 수 있습니다.
  

# 4. 시연영상 링크

https://youtu.be/KgPOE8p0VKs
