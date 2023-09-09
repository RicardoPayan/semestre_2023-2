# File: face_detection_write.py
import cv2 as cv

# input video
handle_read = cv.VideoCapture('Liverpool.mp4')
frame_size = (int(handle_read.get(cv.CAP_PROP_FRAME_WIDTH)),
              int(handle_read.get(cv.CAP_PROP_FRAME_HEIGHT)))
four_cc = int(handle_read.get(cv.CAP_PROP_FOURCC))
fps = int(handle_read.get(cv.CAP_PROP_FPS))

print(frame_size, four_cc, fps)

# output video
handle_write = cv.VideoWriter('people-faces.mp4', four_cc, fps, frame_size)

# cascade classifier
classifier = cv.CascadeClassifier()
if not classifier.load('haarcascade_frontalface_alt.xml'):
    print('Error loading face cascade')
    exit(0)

frame_number = 0

while handle_read.isOpened():
    print(frame_number)
    ret, frame = handle_read.read()
    if ret is True:
        frame_number = frame_number + 1
        faces = classifier.detectMultiScale(frame)
        for (x, y, w, h) in faces:
            frame = cv.rectangle(frame, pt1=(x, y), pt2=(x + w, y + h),
                                 color=(0, 0, 255), thickness=2, lineType=cv.LINE_AA)
        handle_write.write(frame)
    else:
        break

handle_read.release()
handle_write.release()

print(f'{frame_number} frames read')
