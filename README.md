# <p align="center">   QR코드 모바일 결제 시스템 </p>

##### 

<p align="center">소비자들의 주문정보를 처리하기 위한 관리자용 웹페이지입니다.</p>

담당 역할 : 팀장<br>
개발 인원 : 3명 <br>
개발 기간 : 6개월<br>
기여도 : 90%

**목차**

1. 웹의기능
2. 사용한 기술들
3. 시연영상 링크



#  1. 웹의 기능




![](https://private-user-images.githubusercontent.com/43668299/337860212-efb11d98-7119-416f-9f9d-24a7b46c1c12.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTc4MzM4NzEsIm5iZiI6MTcxNzgzMzU3MSwicGF0aCI6Ii80MzY2ODI5OS8zMzc4NjAyMTItZWZiMTFkOTgtNzExOS00MTZmLTlmOWQtMjRhN2I0NmMxYzEyLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjA4VDA3NTkzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWY5NzA5NjMyM2I1ZWUyZWUzM2ZkMGU5ZTUyMmNiMjRhZDk1NTc3NTZkZDcwZTBhMjYyNTM1NGJhOGM5NjkwNzUmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.etPXNp2PaHT2lr1PjMhzk76AMyg-nOKNXhDnF6BLqok)



![](https://private-user-images.githubusercontent.com/43668299/337860243-dfa37e9b-79fa-4f59-8441-402c5bbcb9f7.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTc4MzM4NzEsIm5iZiI6MTcxNzgzMzU3MSwicGF0aCI6Ii80MzY2ODI5OS8zMzc4NjAyNDMtZGZhMzdlOWItNzlmYS00ZjU5LTg0NDEtNDAyYzViYmNiOWY3LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjA4VDA3NTkzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTdmMjU3ODc0NWRlM2NlNDNjNGM3MmRhMDUzZDI0YThjNWRlZGQ1MWU3NjA1YTgxY2U2ODVlMGZjMTg2OTI4ZTUmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.iTVNtej8NjrlarTo9nxMe63__p7CZH8_9C6TlRjUtX8
)



![](https://private-user-images.githubusercontent.com/43668299/337860263-d55f4689-58c4-4fda-81d9-78557d8e9863.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTc4MzM4NzEsIm5iZiI6MTcxNzgzMzU3MSwicGF0aCI6Ii80MzY2ODI5OS8zMzc4NjAyNjMtZDU1ZjQ2ODktNThjNC00ZmRhLTgxZDktNzg1NTdkOGU5ODYzLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjA4VDA3NTkzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWVhZGJkMTE4YzMwYjQwMzI3MzczNGQxMzBjZGMxMWRkOGMxNWE2N2M2OGFjNzFlMTI2NzJmNmRiY2I3MDdhOTcmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.1JsvJT_6fxMkB-A-0xhXYt2FRFJgSUlCdkVjPUpPt7Q)



![](https://private-user-images.githubusercontent.com/43668299/337860286-78dde328-5bfb-4d5c-8333-86f58a06cd09.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTc4MzM4NzEsIm5iZiI6MTcxNzgzMzU3MSwicGF0aCI6Ii80MzY2ODI5OS8zMzc4NjAyODYtNzhkZGUzMjgtNWJmYi00ZDVjLTgzMzMtODZmNThhMDZjZDA5LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjA4VDA3NTkzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPThjZTUwNjUzMzQwNmI5MjU4ODM1MWIwZGQ3NzQyMzk4ZjYwYTVjMTA3Y2RhMDFiOWEyMTM5Njc3OTQ3NDM0OGUmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.P9t2IAf3MWRegY70o0OfkTZ2eJJXd3xL78PcUxfj4uc)



![](https://private-user-images.githubusercontent.com/43668299/337860311-c6623af7-a606-4bc4-91b8-e376b43e6440.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTc4MzM4NzEsIm5iZiI6MTcxNzgzMzU3MSwicGF0aCI6Ii80MzY2ODI5OS8zMzc4NjAzMTEtYzY2MjNhZjctYTYwNi00YmM0LTkxYjgtZTM3NmI0M2U2NDQwLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA2MDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNjA4VDA3NTkzMVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTJmMzEzMTgwMzM3NDUzMDMwYTc5ZmY3ZTUwMDZkNmIxM2U1ZTc2MTYxYzJhMjNlZjMwNmQ1OWUyNzdhYTNhODYmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.grpCnB9yDNcGC13GZKYBwDDtfMG66i-ZpvhddQKu2QQ)



# 기능 상세설명

**1.관리자 페이지 메인화면**

 관리자페이지의 메인화면입니다. 원하는품정보 옵션별 검색**

 상품의 정보를 옵션별로 검색할 수 있습니다. (상품번호, 상품명, 사격)

# 2. 사용한 기술 & 라이브러리

- Language : PHP
- HTML
- JavaScript




# 3. 시연영상 링크

https://youtu.be/KgPOE8p0VKs
