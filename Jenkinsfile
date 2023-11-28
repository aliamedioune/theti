pipeline {
agent any
stages {


stage('Get Repo') {
steps {
sh 'sudo chmod 777 -R /var/lib/jenkins/workspace/CICD/'  
sh 'sudo rm -r /var/lib/jenkins/workspace/CICD/*'
git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
}
}

stage('old build down') {
steps {
sh 'sudo chmod 777 -R /var/run/docker.sock'
sh 'sudo chmod 777 -R /var/lib/jenkins/CICD/'
sh 'cd /var/lib/jenkins/workspace/CICD && docker compose down'
}
}




stage('Build UP') {
steps {

sh 'docker build -t theti2 .'
sh 'cd /var/lib/jenkins/workspace/CICD && docker compose up -d --build'
}
}
stage('Test') {
steps {
sh 'cd /var/lib/jenkins/workspace/CICD && phpunit --log-junit result.xml UnitTestFiles/Test/'
}
}

}
}
