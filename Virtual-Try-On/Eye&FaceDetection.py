# -*- coding: utf-8 -*-
"""
Created on Sat Jun  5 23:17:27 2021

@author: samiha hussein
"""

import sys
sys.path.append('site-packages')
import cv2


# Using the Haar Cascade from OpenCV fro the face detection
face_cascade = cv2.CascadeClassifier('xml/haarcascade_frontalface_default.xml');

# Using the Haar Cascade from OpenCV fro the eyes detection
eyes_cascade = cv2.CascadeClassifier('xml/haarcascade_eye_tree_eyeglasses.xml');


#Capturing webcam's video feed 
video = cv2.VideoCapture(0); 

#Loop to capture each frame being captured by the webcam (live view)

while True:
    check, frame = video.read(); 
    
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY) 
    
    faces = face_cascade.detectMultiScale(gray, scaleFactor = 1.1, minNeighbors = 5);
    
    #Green box around face after detection (temporary for testing)
    for x,y,w,h in faces:
        frame = cv2.rectangle(frame, (x,y), (x+w,y+h), (0,255,0), 3);
        roi_gray = gray[y:y+h, x:x+w] 
        roi_color = frame[y:y+h, x:x+w] 
        eyes = eyes_cascade.detectMultiScale(roi_gray)  
        
        #Green box around the eyes after detection 
        for (ex,ey,ew,eh) in eyes: 
            cv2.rectangle(roi_color,(ex,ey),(ex+ew,ey+eh),(0,127,255),2) 
           
    
    #Window title
    cv2.imshow('Face Detector Test', frame); 
    
    #Wait for key press to close display
    key = cv2.waitKey(5);
    
    #pressing esc key closes the window 
    if key == 27:
        break; 
    
video.release(); 
cv2.destroyAllWindows();