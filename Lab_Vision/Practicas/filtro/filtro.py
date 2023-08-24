import numpy as np
import cv2

arr = np.array( [0, -1, -2, -1, 0, -1, 0, 2, 0, -1, -2,2,8,2,-2,-1,0,2,0,-1,0,-1,-2,-1,0])

img = cv2.imread("imagen.jpg")
imgbnw = cv2.imread("imagen.jpg", cv2.IMREAD_GRAYSCALE)

filter = cv2.filter2D(img,ddepth=-1,kernel=arr)
filteredbnw = cv2.filter2D(imgbnw,ddepth=-1,kernel=arr)

img1 = filter
img2 = filteredbnw
cv2.imshow("COLOR", img)
cv2.waitKey(0)
cv2.imshow("COLOR", filter)
cv2.waitKey(0)

cv2.imshow("COLOR", imgbnw)
cv2.waitKey(0)
cv2.imshow("COLOR", filteredbnw)
cv2.waitKey(0)
