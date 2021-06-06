import cv2;
# Using the Haar Cascade from OpenCV
face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

#Capturing webcam's video feed 
video = cv2.VideoCapture(0); 

#Loop to capture each frame being captured 

while True:
    check, frame = video.read(); 
    faces = face_cascade.detectMultiScale(frame, scaleFactor = 1.1, minNeighbors = 5)
    #Green box around face after detection (for testing)
    for x,y,w,h in faces:
        frame = cv2.rectangle(frame, (x,y), (x+w,y+h), (0,255,0), 3)
    
    cv2.imshow('Face Detector', frame); 
    
    #Wait for key press to close display
    key = cv2.waitKey(1)
    
    #pressing key q
    if key == ord('q'):
        break; 
    
video.release(); 
cv2.destroyAllWindows()